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

    public function productsDetail(){
        return view('frontend.pages.products.show');
    }

    public function faq(){
        return view('frontend.pages.faq.faq');
    }

    public function  blogDetail(){
        return view('frontend.pages.blogs.show');
    }

    public function blogs(){
        return view('frontend.pages.blogs.index');
    }

    public function register(){
        return view('frontend.pages.auth.register');
    }
    public function login(){
        return view('frontend.pages.auth.login');
    }

    public function cart(){
        return view('frontend.pages.cart.cart_list');
    }
    public function cart_2(){
        return view('frontend.pages.cart.step_2');
    }
    public function cart_3(){
        return view('frontend.pages.cart.step_3');
    }
    public function cart_4(){
        return view('frontend.pages.cart.step_4');
    }
    public function cart_4_confirm(){
        return view('frontend.pages.cart.step_4_confirm');
    }
    public function profile(){
        return view('frontend.pages.moj.profile');
    }
    public function mojDetail(){
        return view('frontend.pages.moj.detail');

    }
    public function seller(){
        return view('frontend.pages.seller.seller');
    }
    public function textova(){
        return view('frontend.pages.textova.textova');
    }

}
