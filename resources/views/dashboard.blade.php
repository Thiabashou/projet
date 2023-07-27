<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>



</style>
<link rel="stylesheet" href="{{ asset('css/demandeur.css') }}">
    </head>
    <body>
  
    
<x-app-layout>
    
    <x-slot name="header" >
        <div class="entete">
    <img src="{{ asset('images/logoS.png')}}" height="150" width="160">
   
</div>
    </x-slot>
           
</x-app-layout>
</header>
<main > 
<p align="center">
        <div class="texxt" align="center">
        <br>
        <div class="affiche">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif    
</div>
<br>

             <h2><strong>"Laissez-nous simplifier votre demande <br>
             d'autorisation de sortie de vehicule. Créez un compte <br>
             puis connectez-vous en quelques instants et bénéficiez d'une navigation fluide"
</strong>




<br>
<br>
</h2>
</div>
<div class="container1"> 
    <form  class="container" action="{{ route('form.submit') }}" method="POST">
    @csrf
<h2 align="center"><strong><u>FORMULAIRE DEMANDE</u></strong></h2>
<br>
      <div class="form-group">
        <label for="motif">Motif de la sortie :</label>
        <textarea id="motif" name="motif" placeholder="Entrez le motif de la sortie" required></textarea>
      </div>
     
      <div class="form-group">
        <label for="destination">Destination :</label>
        <input type="text" id="destination" name="destination" placeholder="Entrez la destination" required>
      </div>
      <div class="form-group">
        <label for="date">Date de depart :</label>
        <input type="date" id="date" name="date_depart" required>
      </div>
      <div class="form-group">
        <label for="date">Date  de retour:</label>
        <input type="date" id="date" name="date_retour" required>
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
<br>
<br>
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
<img src="{{ asset('/images/maison.png')}}"    height="50" width="50"> 28 Rue vincens, Dakar, Sénégal<br>
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