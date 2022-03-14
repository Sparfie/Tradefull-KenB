<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Likes;

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
        $video1 =  Likes::findOrFail(1);
        $video2 =  Likes::findOrFail(2);
        return view('home', ['video1' => $video1, 'video2' => $video2,]);
    }
}
