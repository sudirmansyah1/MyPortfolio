<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use Hash;
use Session;
use File;
use App\Models\BlogModel;

class BlogController extends Controller
{
    public function index()
    {
        $bloglist = BlogModel::get();
        return view('blog', ['bloglist' => $bloglist]);
    }
}
