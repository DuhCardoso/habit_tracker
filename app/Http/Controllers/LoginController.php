<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // GET /login
    public  function index(){
        return view("login");
    }

    // GET /login
    public  function authenticate(Request  $request){
        $credentials =$request->validate([
            // Valida os campos de email e senha, garantindo que o email seja um formato válido e que ambos os campos sejam preenchidos
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::attempt($credentials)){
            // Se as credenciais forem válidas, regenera a sessão para evitar ataques de fixação de sessão e redireciona para a página inicial
            $request->session()->regenerate();
            return redirect()->intended("/");
        } else {
            // Se as credenciais forem inválidas, redireciona de volta para a página de login com uma mensagem de erro
            return back()->withErrors([
                "email" => "As credenciais fornecidas estão incorretas."
            ])->onlyInput("email");
        }
    }
}
