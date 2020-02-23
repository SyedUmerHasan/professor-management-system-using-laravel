<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('_user.index');
    }

    public function about()
    {
        return view('_user.about');
    }

    public function blog()
    {
        return view('_user.blog');
    }

    public function contact()
    {
        return view('_user.contact');
    }

}
