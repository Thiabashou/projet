<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Demande;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Flash;

class DemandeController extends Controller
{
    public function index()
    {

        return view('demande');

    }
   
// app/Http/Controllers/DemandeController.php

public function demande()
{
   
    return view('demande');
}


// Dans la méthode qui traite le formulaire
public function store(Request $request)
{
  
       // Validation des données du formulaire
    $validatedData = $request->validate([
        'motif' => 'required',
        'destination' => 'required',
        'date_depart' => 'required',
        'date_retour' => 'required',
    ]);

    // Récupérer l'utilisateur connecté (demandeur)
    $demandeur = Auth::user();

    // Créer une nouvelle demande avec les données du formulaire
    $demande = new Demande();
    $demande->motif = $validatedData['motif'];
    $demande->destination = $validatedData['destination'];
    $demande->date_depart = $validatedData['date_depart'];
    $demande->date_retour = $validatedData['date_retour'];
    $demande->user_id = $demandeur->id;


    // Enregistrer la demande dans la base de données
    $demande->save();

    // Rediriger l'utilisateur vers une page de confirmation ou de succès
    return redirect()->route('dashboard')->with('success', 'Demande enregistrée avec succès!');
}

public function affichageA($numero_demande)
{
    // Récupérer les données de la demande en fonction de $numero_demande depuis la base de données (ou autre source)
    $demande = Demande::where('idDm', $numero_demande)->first();

    // Afficher la vue du formulaire de demande avec les données de la demande

    return view('aller',  ['demande' => $demande]);

}
 
public function traitement(Request $request)
{
    
       // Validation des données du formulaire
    $validatedData = $request->validate([
        'type' => 'required',
        'status' => 'required',
        'heure_depart' => 'required',
        'index_km_retour' => 'required',
    ]);
 
    // Récupérer l'utilisateur connecté (demandeur)
    $numero_demande = $request->input('numero_demande');
    $demande = Demande::where('idDm', $numero_demande)->first(); 
   
-
    $demande->type =$request->input('type');
    $demande->status = $request->input('status');
    $demande->heure_depart = $request->input('heure_depart');
    $demande->index_km_retour = $request->input('index_km_retour');
  
 
 
    // Enregistrer la demande dans la base de données
    $demande->save();
 
    // Rediriger l'utilisateur vers une page de confirmation ou de succès
    return redirect()->route('aller')->with('success', 'Demande validée avec succès!');

}







public function affichageR($numero_demande)
{
    
    return view('retour');
}



public function cloture(Request $request)
{
  
       // Validation des données du formulaire
    $validatedData = $request->validate([
        'heure_retour' => 'required',
        'index_km_retour' => 'required',
      
    ]);

    // Récupérer l'utilisateur connecté (demandeur)
    $numero_demande = $request->input('numero_demande');
    $demande = Demande::where('idDm', $numero_demande)->first(); 
    
    $demande->heure_retour = $request->input('heure_retour');
    $demande->index_km_retour = $request->input('index_km_retour');
  


    // Enregistrer la demande dans la base de données
    $demande->save();

    // Rediriger l'utilisateur vers une page de confirmation ou de succès
    return redirect()->route('retour')->with('success', 'Demande cloturée avec succès!');
}
}