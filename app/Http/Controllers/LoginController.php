<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required|in:demandeur,agent',
        ]);

        // Tenter l'authentification de l'utilisateur
        $credentials = $request->only('email', 'password');
        $role = $request->input('role');

        if (Auth::attempt($credentials)) {
            // L'authentification a réussi

            if ($role === 'demandeur') {
                return redirect('/dashboard');
            } elseif ($role === 'agent') {
                return redirect('/agent');
            }
        } else {
            // L'authentification a échoué

            // Gérer le cas d'échec de connexion
            // Par exemple, rediriger l'utilisateur vers la page de connexion avec un message d'erreur
            return redirect('/login')->with('error', 'Identifiants invalides');
        }
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'agent') {
            return redirect()->route('agent.dashboard');
        } elseif ($user->role === 'demandeur') {
            return redirect()->route('demandeur.dashboard');
        } else {
            // Gérer les autres rôles ou redirection par défaut
            return redirect()->route('default.dashboard');
        }
    }
}
