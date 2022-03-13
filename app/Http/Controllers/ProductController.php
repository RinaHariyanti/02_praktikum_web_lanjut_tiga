<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function category1(){
        return"marbel-edu-games";
    }
    public function category2(){
        return"marbel-and-friends-kids-games";
    }
    public function category3(){
        return"riri-story-books";
    }
    public function category4(){
        return"kolak-kids-songs";
    }
}
