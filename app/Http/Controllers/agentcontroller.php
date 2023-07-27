<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function index()
    {

        // Logique pour afficher Toutes les demande sur la page "agent"
        $demandes = Demande::all();
        return view('agent', ['demandes' => $demandes]);

    }
}