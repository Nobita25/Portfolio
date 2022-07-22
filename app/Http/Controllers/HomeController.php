<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
    	return view('front.index');
    }
    public function about()
    {
    	return view('front.about');
    }
    public function contact()
    {
    	return view('front.contact');
    }
    public function product()
    {
    	return view('front.product');
    }
    public function detail()
    {
    	return view('front.detail');
    }
}
