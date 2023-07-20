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
       <p align="center">
        "Veuillez renseigner les informations si dessous pour valider l'autorisation de la sortie"
       </p>
       <br>
    <br>
    

    
        <br>
       <div align="center">

    <form class="content">
    <h2><u>Formulaire Retour</u></h2>
    <br>
    
        <div  class="contenu">
    
          <div class="form-group">
            <label for="unite">Heure retour :</label>
            <input type="text" id="unite" name="unite" placeholder="Entrez l'heure de retour" required>
          </div>
          <br>
          <div class="form-group">
            <label for="kilometrage">Index kilometrique retour :</label>
            <input type="number" id="kilometrage" name="kilometrage" placeholder="Entrez l'index kilometrique retour" required>
          </div>
          <br>
        
          <div class="form-group">
            <input type="submit" value="Valider">
            </div>
    </div>
    </form>
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
         <br> <br>
        
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