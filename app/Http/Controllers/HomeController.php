<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends UserBaseController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
