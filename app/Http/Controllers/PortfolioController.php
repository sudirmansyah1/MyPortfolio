<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Hash;
use Session;
use File;
use App\Models\PortfolioModel;
class PortfolioController extends Controller
{
    public function index(){
        $project = PortfolioModel::get();

        return view('portfolio', ['portfolio' => $project]);
    }

    public function adminPortfolio(){
        $project = PortfolioModel::get();
        return view('admin.portfolio.list',['projects'=>$project]);
    }

    public function showAddPortfolioForm(){
        return view('admin.portfolio.add');
    }

    public function AddPortfolioProcess(Request $req){
        $rules = [
            'project_name' => 'required',
            'project_link' => 'required',
            'project_code' => 'required',
            'project_image' => 'required|max:10240|mimes:jpeg,jpg,png',
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }

        $imagefile = $req->file('project_image');
        $imagename = pathinfo($imagefile->getClientOriginalName(), PATHINFO_FILENAME);
        $imagefile->move(public_path().'/assets/img/upload/portfolio', $imagename.'_'.time().'.'.$imagefile->getClientOriginalExtension());

        PortfolioModel::insert([
            'project_name' => $req->project_name,
            'project_link' => $req->project_link,
            'project_code' => $req->project_code,
            'project_image' => 'assets/img/upload/portfolio/'.$imagename.'_'.time().'.'.$imagefile->getClientOriginalExtension()
        ]);

        return redirect('admin/portfolio');
    }

    public function showEditPortfolioForm($id){
        $portfolio = PortfolioModel::where('pid', $id)->get();
        return view('admin.portfolio.edit', ['portfolio'=>$portfolio]);
    }

    public function EditPortfolioProcess(Request $req){
        $rules = [
            'project_name' => 'required',
            'project_link' => 'required',
            'project_code' => 'required',
            'project_image' => 'max:10240|mimes:jpeg,jpg,png',
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }
        
        PortfolioModel::where('pid', $req->pid)->update([
            'project_name' => $req->project_name,
            'project_link' => $req->project_link,
            'project_code' => $req->project_code,
        ]);

        $imagefile = $req->file('project_image');
        if(!is_null($imagefile)){
            $imagename = pathinfo($imagefile->getClientOriginalName(), PATHINFO_FILENAME);
            $imagefile->move(public_path().'/assets/img/upload/portfolio', $imagename.'_'.time().'.'.$imagefile->getClientOriginalExtension());
            File::delete(public_path().'/'.$req->lastimage);
            UserModel::where('pid', $req->pid)->update([
                'photo' => 'assets/img/upload/portfolio/'.$imagename.'_'.time().'.'.$imagefile->getClientOriginalExtension(),
            ]);
        }

        return redirect('admin/portfolio');
    }

    public function DeletePortfolioProcess($id){
        $gambar = PortfolioModel::where('pid', $id)->first();
        File::delete(public_path().'/'.$gambar->project_image);
        PortfolioModel::where('pid', $id)->delete();

        return redirect('admin/portfolio');
    }
}
