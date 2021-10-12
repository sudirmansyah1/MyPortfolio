<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Validator;
use Hash;
use Session;
use File;
use App\Models\BlogModel;

class BlogController extends Controller
{
    public function index()
    {
        $bloglist = BlogModel::paginate(10);
        return view('blog', ['bloglist' => $bloglist]);
    }

    public function blogview($id)
    {
        $blogview = BlogModel::where('id', $id)->get();
        return view('blogview', ['blogview' => $blogview]);
    }

    public function adminBlog(){
        $bloglist = BlogModel::get();
        return view('admin.blog.list', ['bloglist' => $bloglist]);
    }

    public function showAddBlogForm(){
        return view('admin.blog.add');
    }

    public function AddBlogProcess(Request $req){
        $rules = [
            'title' => 'required',
            'text' => 'required',
            'image' => 'required|max:10240|mimes:jpeg,jpg,png',
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }

        $imagefile = $req->file('image');
        $imagename = pathinfo($imagefile->getClientOriginalName(), PATHINFO_FILENAME);
        $imagefile->move(public_path().'/assets/img/upload/blog', $imagename.'_'.time().'.'.$imagefile->getClientOriginalExtension());

        BlogModel::insert([
            'title' => $req->title,
            'created_at' => date("Y-m-d H:i:s",time()),
            'text' => $req->text,
            'image' => 'assets/img/upload/blog/'.$imagename.'_'.time().'.'.$imagefile->getClientOriginalExtension(),
            'uid' => Auth::user()->id
        ]);

        return redirect('admin/blog');
    }

    public function showEditBlogForm($id) {
        $blogview = BlogModel::where('id', $id)->get();
        return view('admin.blog.edit',['blogdata'=>$blogview]);
    }

    public function EditBlogProcess(Request $req){
        $rules = [
            'title' => 'required',
            'text' => 'required',
            'image' => 'max:10240|mimes:jpeg,jpg,png',
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }

       
        BlogModel::where('id', $req->id)->update([
            'title' => $req->title,
            'updated_at' => date("Y-m-d H:i:s",time()),
            'text' => $req->text,
        ]);

        $imagefile = $req->file('image');
        if(!is_null($imagefile)){
            $imagename = pathinfo($imagefile->getClientOriginalName(), PATHINFO_FILENAME);
            $imagefile->move(public_path().'/assets/img/upload/blog', $imagename.'_'.time().'.'.$imagefile->getClientOriginalExtension());
            File::delete(public_path().'/'.$req->lastimage);
            BlogModel::where('id', $req->id)->update([
                'image' => 'assets/img/upload/blog/'.$imagename.'_'.time().'.'.$imagefile->getClientOriginalExtension(),
            ]);
        }

        return redirect('admin/blog');
    }

    public function DeleteBlogProcess($id){
        $gambar = BlogModel::where('id', $id)->first();
        File::delete(public_path().'/'.$gambar->image);
        BlogModel::where('id', $id)->delete();

        return redirect('admin/blog');
    }
}
