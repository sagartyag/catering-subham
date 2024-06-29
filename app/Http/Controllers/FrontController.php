<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('main.home');
    }


    public function about_us()
    {
        return view('main.about');
    }

    public function services()
    {
        return view('main.service');
    }
    public function faq()
    {
        return view('main.faq');
    }

    public function team()
    {
        return view('main.team');
    }

    public function support()
    {
        return view('main.support');
    }
    
    

}
