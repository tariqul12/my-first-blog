<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blog ,$image ,$imageNewName,$directory,$imgUrl;

    public static function createBlog($request)
    {
        self::$blog=new Blog();
        self::$blog->title=$request->title;
        self::$blog->description=$request->description;
        self::$blog->image=self::saveImage($request);
        self::$blog->save();
    }

    private static function saveImage($request)
    {
        self::$image = $request->file('image');
        self::$imageNewName = $request->title.'-'.rand().'.'.self::$image->extension();
        self::$directory = 'image/';
        self::$imgUrl = self::$directory.self::$imageNewName;
        self::$image->move(self::$directory,self::$imageNewName);

        return self::$imgUrl;
    }






    public static function updateBlog($request)
    {
        self::$blog=Blog::find($request->id);
        self::$blog->title = $request->title;
        self::$blog->description = $request->description;
        if ($request->image) {
            self::$blog->image = $request->image;
        }
        self::$blog->save();

    }
    public static function deleteBlog($id)
    {
        self::$blog=Blog::find($id);
        self::$blog->delete();
    }


}
