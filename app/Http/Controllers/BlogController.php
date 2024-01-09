<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.add');
    }
    public function saveBlog(Request $request)
    {
        Blog::createBlog($request);

        return redirect(route('blog.add'));
    }
    public function manageBlog()
    {
        return view('blog.manage',[
            'blogs'=>Blog::all()
        ]);
    }
}
