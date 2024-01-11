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
    public function editBlog($id)
    {
        return view('blog.edit',['blog'=>Blog::find($id)]);
    }
    public function updateBlog(Request $request)
    {
       Blog::updateBlog($request);
       return redirect(route('blog.manage'))->with('message','info update successfully');
    }
    public function deleteBlog(Request $request)
    {
        Blog::deleteBlog($request->id);
        return redirect(route('blog.manage'))->with('message','info deleted');
    }
}
