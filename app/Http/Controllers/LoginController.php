<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
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
    public  function authenticate(LoginRequest  $request){
        // Extrai apenas os campos de email e senha da requisição para autenticação
        $credentials =$request->only("email","password");

        if (Auth::attempt($credentials)){
            // Se as credenciais forem válidas, regenera a sessão para evitar ataques de fixação de sessão e redireciona para a página inicial
            $request->session()->regenerate();
            return redirect()->intended(route('site.dashboard'));
        }

        // Se as credenciais forem inválidas, redireciona de volta para a página de login com uma mensagem de erro
        return back()->withErrors([
            "email" => "Por favor, insira um endereço de email válido.",
        ]);

    }

    public function logout(Request $request): RedirectResponse{
        // Realiza o logout do usuário, invalida a sessão atual e redireciona para a página de login
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('site.index'));
    }
}
