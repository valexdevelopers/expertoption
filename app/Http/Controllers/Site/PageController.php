<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function about(){
        return view('about');
    }

    public function faq(){
        return view('faqs');
    }

    public function contact(){
        return view('contact');
    }

    public function cryptocurrency(){
        return view('cryptocurrency');
    }

    public function cryptomining(){
        return view('cryptomining');
    }

    public function realestate(){
        return view('realestate');
    }
    public function forexstock(){
        return view('forexstock');
    }
    public function privacy(){
        return view('privacy');
    }

    
}
