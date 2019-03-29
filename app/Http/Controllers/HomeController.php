<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $colors = [
            'Silver', 'Gray', 'Black', 'Red', 'Maroon', 'Yellow', 'Olive',
            'Lime', 'Green', 'Aqua', 'Teal', 'Blue', 'Navy', 'Fuchsia', 'Purple',
        ];
        return view('home')->with('colors',$colors);
    }
}
