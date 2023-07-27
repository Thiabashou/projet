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
        "Veuillez renseigner les informations si dessous pour cloturer la demande"
       </p>
       <br>
       <br>
           <br>
    <div align="center">
      <div class="content1"> 
  <form  class="contenu1" action="{{ route('form.clotureDm') }}"method="POST">
  @csrf
<h2 align="center"><strong><u>FORMULAIRE DE RETOUR</u></strong></h2>
  <br>
  <input type="hidden" name="numero_demande" value="{{ Request::get('numero_demande') }}">
  
    <div class="form-group">
      <label for="unite">Heure retour :</label>
      <input type="time" id="heure_retour" name="heure_retour" placeholder="Entrez l'heure de retour" required>
    </div>
    <br>
    <div class="form-group">
      <label for="kilometrage">Index kilometrique retour :</label>
      <input type="number" id="index_km_retour" name="index_km_retour" placeholder="Entrez l'index kilometrique retour" required>
    </div>
    <div> 
    <br>
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
   &copy; 2023- Tous droits réservés par la SENELEC
<br>
<br>
<br>
</div>
</div>
</footer>
</body>
</html>