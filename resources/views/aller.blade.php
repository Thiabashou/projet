<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Agent</title>
    <link rel="stylesheet" href="{{ asset('css/agent.css') }}">
    <style>

    </style>
</head>
<body>

<x-app-layout>
    

    <x-slot name="header" >
   
        <div class="entete">
        <img src="{{ asset('images/logoS.png')}}" height="150" width="160">
              
        </div>
        
    </x-slot>
</x-app-layout>

    <br>
    <br>
    
    <main >
      <div class="affiche">
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif    
    </div>
       <p align="center">
        "Veuillez renseigner les informations si dessous pour valider l'autorisation de la sortie"
       </p>
       <br>

    <br>
        <br>
       <div align="center">
        <div class="content">
    <form  class="contenu" action="{{ route('form.traiterDm') }}"method="POST">
      
        <h2 align="center"><strong><u>FORMULAIRE DE DEPART</u></strong></h2>
        <br>
        @csrf
      <input type="hidden" name="numero_demande" value="{{ Request::get('numero_demande') }}">
      
      <div class="labb"><label  for="type"><strong>Type :</strong></label></div>
      <select class="form-group" id="type" name="type">
        <option value="aller">Aller</option>
      </select>
      <div class="labb"><label for="status"><strong>Statut :</strong></label></div>
      <select class="form-group" id="status" name="status">
        <option value="en_cours">En cours</option>
        <option value="accepte">Accepté</option>
        <option value="refuse">Refusé</option>
      </select>
      <div class="form-group">
        <label for="unite">Heure depart :</label>
        <input type="time" id="heure depart" name="heure depart" placeholder="Entrez l'heure de depart" required>
      </div>
      <div class="form-group">
        <label for="kilometrage">Index kilometrique depart :</label>
        <input type="number" id="index_km_depart" name="index_km_depart" placeholder="Entrez l'index kilometrique depart" y required>
      </div>
      <div> 
      <br>
      
        <p align="center">        
                 <x-primary-button type="submit">
                    <strong>Envoyer</strong></u>
                 </x-primary-button>  
        </p>
      </div> 
</div>
</div>
 </div>
         </div>
         <br>
         <br>
         <br>
         <br>
         <br>
         <br> <br>
         <br>
     
        
</main>
<footer> 
<div>
<div align="center">
    <br>
    <br>

<p>
<img src="{{ asset('images/logoS.png')}}" height="110" width="200">
</p>
</div>

<h2 id="contact">Contact</h2>  

<p>
<img src="{{ asset('images/maison.png')}}"   height="50" width="50"> 28 Rue vincens, Dakar, Sénégal<br>
<img src="{{ asset('images/telephone.png')}}" height="50" width="50"> 33 867 66 66 <br>
<img src="{{ asset('images/mail.png')}}"      height="50" width="50"> contact@senelec.sn<br>
</p> 
<br>
<br>
<br>


<div align="center" class="pied">
<hr>
<br>
&copy; 2023- Tous droits réservés par la SENELEC.
<br>
<br>
<br>
</div>
</div>
</footer>
</body>
</html>