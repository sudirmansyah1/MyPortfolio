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
}
