<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home.index');
    }
    public function products(){
        return view('frontend.pages.products.index');
    }
    public function contact(){
        return view('frontend.pages.contact');
    }
}
