<?php

namespace App\Http\Controllers\Authentification;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Auth.login');
    }

    public function showRegistrationForm()
    {
        return view('Auth.signup');
    }
    public function register(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'PhoneNumber' => 'required|string|max:20',
            'role' => 'required|in:user,delivery', // Seuls 'user' et 'delivery' sont autorisés
        ]);

        // Création de l'utilisateur
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'PhoneNumber' => $request->PhoneNumber,
            'role' => $request->role,
        ]);

        // Connecter l'utilisateur après l'inscription
        auth()->login($user);

        // Redirection après inscription
        return redirect('/dashboard')->with('success', 'Inscription réussie !');
    }

    public function login(Request $request)
{
    // Validation des données
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    // Tentative de connexion
    if (auth()->validate(['email' => $request->email, 'password' => $request->password])) {
        // Régénérer la session pour éviter les attaques de fixation de session
        $request->session()->regenerate();

        // Redirection en fonction du rôle
        if (auth()->User()->role === 'admin') {
            return redirect('/admin/dashboard');
        } elseif (auth()->User()->role === 'delivery') {
            return redirect('/delivery/dashboard');
        } else {
            return redirect('/dashboard');
        }
    }

    // En cas d'échec de connexion
    return back()->withErrors([
        'email' => 'Les identifiants fournis ne correspondent pas à nos enregistrements.',
    ]);
}
    

    public function logout(){

    }
}
