<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        return view('site.pages.products.edu.eduMeeting');
    }

    public function product_subscribe()
    {
        return view('site.pages.products.edu.product_subscribe');
    }

    public function features()
    {
        return view('site.pages.products.edu.features');
    }
}
