<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // GET /login
    public  function index(){
        return view("login");
    }
}
