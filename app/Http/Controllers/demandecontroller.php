<?php

namespace App\Http\Controllers;

use App\Model\Demande;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\demandecontroller;

class agentcontroller extends Controller
{
    public function index()
    {

        // Logique pour afficher la page "client"
        return view('demande');

    }
    public function submit_aller(Request $request)
{
    // Traitement des données du formulaire de demande
    // ...
$demande =$request->all();

$demande['status'] = 'en cours';
$demande['type'] = 'aller';
Demande::create($demande);

    // Redirection vers la page de demande avec un message de succès
    return redirect()->route('retour')->with('success', 'La demande a été envoyée avec succès !');
}
public function submit_retour(Request $request)
{
    // Traitement des données du formulaire de demande
    // ...

    $demande =$request->all();

   
    $demande['status'] = 'en cours';
    $demande['type'] = 'aller';
    Demande::create($demande);
    // Redirection vers la page de demande avec un message de succès
    return redirect()->route('retour')->with('success', 'La demande a été envoyée avec succès !');
}
// app/Http/Controllers/DemandeController.php

public function demande()
{
    // Logique pour récupérer les données nécessaires à la page de demande
    // ...

    return view('demande');
}

}