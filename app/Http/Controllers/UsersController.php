<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Validator;
use Hash;
use Session;
use File;

class UsersController extends Controller
{
    public function index() {
        $users = UserModel::get();
        return view('admin.users.list', ['userlist' => $users]);
    }

    public function showAddUserForm() {
        return view('admin.users.add');
    }

    public function AddUserProcess(Request $req) {
        $rules = [
            'username'                 => 'required|unique:users,name',
            'email'                 => 'required|email|unique:users,email',
            'level'                 => 'required',
            'password'              => 'required|min:6',
            'isActive'                 => 'required',
            'photofile'                 => 'required|max:2048|mimes:jpeg, png, jpg',
        ];
  
        $validator = Validator::make($req->all(), $rules);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }

        $photofile = $req->file('photofile');
        $photoname = pathinfo($photofile->getClientOriginalName(), PATHINFO_FILENAME);
        $uplaod = $photofile->move(public_path().'/assets/img/upload/users',$photoname.'_'.time().'.'.$photofile->getClientOriginalExtension());
        UserModel::insert([
            'name' => $req->username,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'level' => $req->level,
            'isActive' => $req->isActive,
            'photo' => 'assets/img/upload/users/'.$photoname.'_'.time().'.'.$photofile->getClientOriginalExtension(),
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/admin/users');
    }

    public function showEditUserForm($id){
        $user = UserModel::where('id', $id)->get();
        return view('admin.users.edit', ['user'=>$user]);
    }

    public function EditUserProcess(Request $req){
        $rules = [
            'username'                 => 'required|unique:users,name,'.$req->id.',id',
            'email'                 => 'required|email|unique:users,email,'.$req->id.',id',
            'level'                 => 'required',
            // 'password'              => 'min:6',
            'isActive'                 => 'required',
            'photofile'                 => 'max:2048|mimes:jpeg, png, jpg',
        ];
  
        $validator = Validator::make($req->all(), $rules);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }

        UserModel::where('id', $req->id)->update([
            'name' => $req->username,
            'email' => $req->email,
            'level' => $req->level,
            'isActive' => $req->isActive,
        ]);

        $photofile = $req->file('photofile');
        if (!is_null($photofile)) {
            $photoname = pathinfo($photofile->getClientOriginalName(), PATHINFO_FILENAME);
            $photofile->move(public_path().'/assets/img/upload/users',$photoname.'_'.time().'.'.$photofile->getClientOriginalExtension());
            File::delete(public_path().'/'.$req->lastphoto);
            UserModel::where('id', $req->id)->update([
                'photo' => 'assets/img/upload/users/'.$photoname.'_'.time().'.'.$photofile->getClientOriginalExtension(),
            ]);
        }

        if (!is_null($req->password)) {
            UserModel::where('id', $req->id)->update([
                'password' => Hash::make($req->password),
            ]);
        }

        return redirect('/admin/users');

    }

    public function DeleteUser($id) {
        $gambar = UserModel::where('id',$id)->first();
		File::delete(public_path().'/'.$gambar->photo);
        UserModel::where('id', $id)->delete();
        return redirect('/admin/users');
    }
}
