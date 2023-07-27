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
      
       <br>


    
        <br>


       <div align="center">

     <h1><strong ><u class="colour">LISTE DE TOUTES LES DEMANDES:</u></strong></h1>
     <br> 
     <br>
      <table style="border: 1px solid black; border-collapse: collapse;">
       <thead>
         <tr class="coloru">
            <th style="border: 1px solid black; padding: 8px; margin-right: 20px;">Numero_demande</th>
            <th style="border: 1px solid black; padding: 8px; margin-right: 20px;"> id_demandeur</th>
            <th style="border: 1px solid black; padding: 8px; margin-right: 20px;">Motif de la sortie </th>
            <th style="border: 1px solid black; padding: 8px; margin-right: 20px;">Destination </th>
            <th style="border: 1px solid black; padding: 8px; margin-right: 20px;">Date_de_depart</th>
            <th style="border: 1px solid black; padding: 8px; margin-right: 20px;">Date_de_retour</th>
            <th style="border: 1px solid black; padding: 8px; margin-right: 20px;">Compléter_demande</th>
            <th style="border: 1px solid black; padding: 8px; margin-right: 20px;">Cloturer _demande</th>
         </tr>
       </thead>
    <tbody>
        @foreach ($demandes as $demande)
            <tr>
                <td class="coloru" style="border: 1px solid black; padding: 8px; margin-right: 20px;">{{ $demande->idDm }}</td>
                <td style="border: 1px solid black; padding: 8px; margin-right: 20px;">{{ $demande->user_id }}</td>
                <td style="border: 1px solid black; padding: 8px; margin-right: 20px;">{{ $demande->motif }}</td>
                <td style="border: 1px solid black; padding: 8px; margin-right: 20px;">{{ $demande->destination }}</td>
                <td style="border: 1px solid black; padding: 8px; margin-right: 20px;">{{ $demande->date_depart }}</td>
                <td style="border: 1px solid black; padding: 8px; margin-right: 20px;">{{ $demande->date_retour }}</td>

                <td style="border: 1px solid black; padding: 8px; margin-right: 20px;">
   <a href="{{ route('aller', ['numero_demande' => $demande->idDm]) }}" class="co"><u>Compléter la demande</u></a>
              </td>
                <td style="border: 1px solid black; padding: 8px; margin-right: 20px;">
   <a href="{{ route('retour', ['numero_demande' => $demande->idDm]) }}" class="co"><u>Cloturer la demande</u></a>
              </td>
            </tr>
        @endforeach
    </tbody>
</table>
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