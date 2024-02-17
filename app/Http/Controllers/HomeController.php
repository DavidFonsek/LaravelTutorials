<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    /*public function about(): View
    {
        return view('home.about')->with([
            "title" => "About us - online store",
            "subtitle" => "About us",
            "description" => "This is an about page...",
            "author" => "Developed by: David Fonsek",
        ]);
    }*/

    public function contact(): View{
        return view('home.contact');
    }
}
