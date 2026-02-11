<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

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
            return redirect()->intended(route('site.dashboard'));
        }

        // Se as credenciais forem inválidas, redireciona de volta para a página de login com uma mensagem de erro
        return back()->withErrors([
            "email" => "As credenciais fornecidas estão incorretas."
        ])->onlyInput("email");

    }

    public function logout(Request $request): RedirectResponse{
        // Realiza o logout do usuário, invalida a sessão atual e redireciona para a página de login
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('site.index'));
    }
}
