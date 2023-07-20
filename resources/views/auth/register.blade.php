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
   body {
    
    margin: 0;
    padding: 0;
    display: grid;
    grid-template-rows: auto 1fr auto; /* Ajoutez cette ligne */
    grid-template-areas: "header" "main" "footer";
  
  }
  .pied {
    background-color: rgb(10, 50, 96);
  }

ul {
    list-style-type: none; /* Supprime les puces de la liste */
    padding: 0; /* Supprime le padding par défaut */
    margin: 0; /* Supprime la marge par défaut */
  }
  
  li {
    padding: 10px; /* Ajoute un espacement interne aux éléments de la liste */
    color: red;
  }
  
  a {
    text-decoration: none; /* Supprime la décoration de lien par défaut */
    color: white; /* Couleur du texte des liens */
  }

header {    
background-color: rgb(31, 113, 141);
flex-direction: row;
margin: auto;
padding: 1px;
height: 135px;
width: 100%;
margin-bottom: 20px;
} 




main {
background-color: rgb(255, 255, 255);
padding:auto;
height:auto;
flex-direction: row;
}

footer {
background-color: rgb(6, 6, 83);
color: white;
padding: auto;
position: flex;
width: auto;
height: auto;
flex-direction: row;
}
.container h1 {
    color:white;
}

.container {
    padding: 30px;
    color: rgb(49, 124, 161);
    max-width:500px;
    height:600px;
    border-radius: 40px;
    background-color: white;
    box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
    color: rgb(49, 124, 161);

}

.flow {
    background-attachment: fixed;
    background-color: rgb(6, 6, 83);;
    max-width:500px;
    height:1500px;
    border-radius: 40px;
   
    box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
}



.test5 {
    color: white;
}

.ecrit {
    color: rgb(40, 81, 102);
}

.connect {
    color: rgb(40, 81, 102);
}


    </style>
    </head>
    <body>
        <section >
    <header>
        
    <p>
    <img src="{{ asset('images/logoS.png')}}" height="110" width="200">
    </p>
   
        </header>
      
        <main> 
        <p align="center">
          
<br>
<br>

<div  align="center">
             <strong class="ecrit">"Veuillez renseigner vos informations et creer vous un compte"</strong>
</div>
<br>
<br>
<x-guest-layout class="flow">
    <form method="POST" action="{{ route('register') }}" class="container">
        @csrf
        

        <div align="center" class="connect"><strong><u>INSCRIPTION</u></strong></div>
       
<br>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-input-label for="matricule" :value="__('Matricule')" />
            <x-text-input id="matricule" class="block mt-1 w-full" type="text" name="matricule" :value="old('matricule')" required autofocus autocomplete="matricule" />
            <x-input-error :messages="$errors->get('matricule')" class="mt-2" />
        </div>
        <div>
    <x-input-label for="unite" :value="__('Unite du demandeur')" />
    <select id="unite" class="block mt-1 w-full" name="unite" required autofocus autocomplete="unite">
        <option value="">Sélectionnez une unité</option>
        <option value="Vincens">Vincens</option>
        <option value="Hann">Hann</option>
        <option value="Keur Gorgui">Keur Gorgui</option>
        <!-- Ajoutez d'autres options selon vos besoins -->
    </select>
    <x-input-error :messages="$errors->get('unite')" class="mt-2" />
</div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


</div>
 
 </p>   
 <br>
<br><br>
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

<h2>Contact</h2>  

<p>
<img src="{{ asset('images/maison.png')}}"    height="50" width="50"> 28 Rue vincens, Dakar, Sénégal<br>
<img src="{{ asset('images/telephone.png')}}" height="50" width="50"> 33 867 66 66 <br>
<img src="{{ asset('images/mail.png')}}"      height="50" width="50"> contact@senelec.sn<br>
</p> 
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
</section>
</body>
</html>