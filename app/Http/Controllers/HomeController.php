<?php
namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        $env = ['pictures' => []];
        return view('home', $env);
    }

    public function rsvp(\Request $request)
    {

    }
}