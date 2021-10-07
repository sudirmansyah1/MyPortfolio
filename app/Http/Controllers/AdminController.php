<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
class AdminController extends Controller
{
    public function index(){
        $totaluser = UserModel::get()->count();
        return view('admin.home', ['totaluser'=>$totaluser]);
    }
}
