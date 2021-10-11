<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;


class AuthController extends Controller
{
    public function index() {
        return view('admin.login');
    }

    public function login_process(Request $req){
        $rules = [
            'username'                 => 'required',
            'password'              => 'required|min:6'
        ];
  
        $messages = [
            'username.required'        => 'Username wajib diisi',
            'password.required'     => 'Password wajib diisi',
            'min' => ':attribute harus di-isi minimal :min karakter!',
        ];
  
        $validator = Validator::make($req->all(), $rules, $messages);
  
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($req->all);
        }
        
        $data = [
            'name' => $req->username,
            'password' => $req->password
        ];
        // return "Test";
        Auth::attempt($data);
        if (Auth::check()) {
            var_dump("true");
            die;
            return redirect()->route('admin');
        } else{
            return "Maaf email atau password yang anda masukan tidak sesuai.";
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home-main');
    }
}
