<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardcontroller extends Controller
{
    public function index()
    {
        // Logique pour afficher le tableau de bord
        return view('dashboard');
    }
}