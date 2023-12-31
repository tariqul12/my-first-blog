<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public static $blogs=[
        0=>[
            'id'=>1,
            'title'=>"this is blog one",
            'img'=>'img/1.jpg',
            'des'=>"this is blog title one"
        ],
        1=>[
            'id'=>2,
            'title'=>"this is blog two",
            'img'=>'img/2.jpg',
            'des'=>"this is blog title two"
        ],
        2=>[
            'id'=>3,
            'title'=>"this is blog three",
            'img'=>'img/3.jpg',
            'des'=>"this is blog title three"
        ],
        3=>[
            'id'=>4,
            'title'=>"this is blog fore",
            'img'=>'img/4.jpg',
            'des'=>"this is blog title fore"
        ],
        4=>[
            'id'=>5,
            'title'=>"this is blog five",
            'img'=>'img/5.jpg',
            'des'=>"this is blog title five"
        ],
    ];
    public static function GetAllBlog()
    {
        return self::$blogs;
    }

}
