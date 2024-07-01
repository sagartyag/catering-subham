<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;


use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function menu()
{
    $categories = Category::all();
    $names = $categories->pluck('categoryname');
    $products = Product::all();

    return view('frontend.menu', compact('categories','products'));
}


    public function event()
    {
        return view('frontend.event');
    }



}
