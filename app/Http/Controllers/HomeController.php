<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imgs = [
            "IMG_20160101_151928616.jpg",
            "IMG_20160101_131617718.jpg",
            "IMG_20151231_093751813.jpg",
            "IMG_20151231_113911597.jpg",
            "IMG_20151223_192048877.jpg",
            "IMG_20140302_160937.jpg"
        ];

        $imgs = array_map(function ($value) {
            return asset("images/pictures/" . $value);
        }, $imgs);

        $env = [
            'imageMain' => $imgs[array_rand($imgs)],
        ];
        return view('home', $env);
    }

    public function loggedIndex()
    {
        return view('adm');
    }
}
