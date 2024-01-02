<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use function Illuminate\Validation\message;

class HomeContrller extends Controller
{
    public $blogs,$blog,$fullName,$series,$i;

    public function index()
    {
        return view("home");
    }
    public function about()
    {
        $this->blogs=Blog::GetAllBlog();
        return view("about",[
            'blogs'=>$this->blogs,
        ]);
    }
    public function contact()
    {
        return view('contact');
    }
    public function detail($id)
    {
        $this->blog=Blog::getBlogById($id);
        return view('detail',[
            "blog"=>$this->blog,
        ]);
    }
    public function makeFullName(Request $request)
    {
        $this->fullName=$request->first_name .' '.$request->last_name;

      return redirect('/contact')->with('message    ',$this->fullName);
    }
    public function series()
    {
        return view('series');
    }
    public function makeSeries(Request $request)
    {
        if ($request->first_number < $request->last_number)
        {
            for ($this->i = $request->first_number; $this->i<=$request->last_number; $this->i++)
            {
                $this->series .= $this->i." ";
            }
        }else{
            for ($this->i = $request->first_number; $this->i>=$request->last_number; $this->i--)
            {
                $this->series .= $this->i." ";
            }
        }

      return redirect('/series')->with("message",$this->series);

    }
}
