<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('front.home');
    }

    public function blank()
    {
        return view('front.blank');
    }

    public function aboutPage()
    {
        $data = [
            'title' => 'About Page'
        ];

        return view('front.about', $data);
    }
}
