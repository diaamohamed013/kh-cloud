<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('site.pages.home');
    }

    public function aboutUs()
    {
        return view('site.pages.aboutUs');
    }

    public function features()
    {
        return view('site.pages.features');
    }

    public function pricing()
    {
        return view('site.pages.pricing');
    }
}
