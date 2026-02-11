<?php

namespace App\Http\Controllers;


class SiteController extends Controller
{
    public function index()
    {
        $name = "Eduardo";
        $habits = ["Correr", "Ler", "Codar"];

        return view('home', compact('name', 'habits'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
