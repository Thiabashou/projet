<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\demandecontroller;
use Illuminate\Support\Facades\Auth;
use Flash;

class demandecontroller extends Controller
{
    public function index()
    {

        // Logique pour afficher la page "client"
        return view('demande');

    }
    public function submitForm(Request $request)
    {
        // Traitement du formulaire ici (par exemple, sauvegarde des données dans la base de données)
        // $request contient les données envoyées par le formulaire
        
        // Exemple de sauvegarde des données dans la base de données
        // Vérifiez le nom des champs du formulaire dans votre HTML pour les récupérer correctement ici
        $demande = new Demande();
        $motif = $request->input('motif');
        $destination = $request->input('destination');
        $date = $request->input('dateDm');
        
       

        // Enregistrez les données dans la base de données en utilisant le modèle approprié
        // Exemple : Demande::create(['motif' => $motif, 'destination' => $destination, 'date' => $date]);
        
        // Redirigez l'utilisateur vers une page de succès ou une autre action souhaitée
        return redirect()->route('dashboard')->with('success', 'Votre formulaire a été soumis avec succès !');
    }
   
// app/Http/Controllers/DemandeController.php

public function demande()
{
    // Logique pour récupérer les données nécessaires à la page de demande
    // ...

    return view('demande');
}


// Dans la méthode qui traite le formulaire
public function store(Request $request)
{
  
       // Validation des données du formulaire
    $validatedData = $request->validate([
        'motif' => 'required',
        'destination' => 'required',
        'dateDm' => 'required',
    ]);

    // Récupérer l'utilisateur connecté (demandeur)
    $demandeur = Auth::user();

    // Créer une nouvelle demande avec les données du formulaire
    $demande = new Demande();
    $demande->motif = $validatedData['motif'];
    $demande->destination = $validatedData['destination'];
    $demande->dateDm = $validatedData['dateDm'];
    $demande->user_id = $demandeur->id;


    // Enregistrer la demande dans la base de données
    $demande->save();

    // Rediriger l'utilisateur vers une page de confirmation ou de succès
    return redirect()->route('dashboard')->with('success', 'Demande enregistrée avec succès!');
}
}