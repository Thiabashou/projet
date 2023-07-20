<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class agentcontroller extends Controller
{
    public function index()
    {

        // Logique pour afficher la page "client"
        return view('agent');

    }
}