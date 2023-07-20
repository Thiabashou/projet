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
padding: auto;
height: 100%;
width: 100%;
margin-bottom: 20px;
} 

main {
background-color: rgb(255, 255, 255);
padding:auto;
width:100%;
height:100%;
flex-direction: row;
color:darkblue;
}

footer {
background-color: rgb(6, 6, 83);
color: white;
padding: auto;
position: flex;
max-width: auto;
height: auto;
flex-direction: row;
}

.test0 {
    display: flex;
    justify-content: flex-end;
}

.test1 {
    display: flex;
    align-items: center;
}

.test5 {
    color: rgb(40, 81, 102);
}

.container h1 {
    color:white;
}

.container {
    padding: 30px;
    color: white;
    max-width:500px;
    height:500px;
    border-radius: 40px;
    background-color: white  ;
    box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
    margin: 0 auto;
}
.connect {
    color: rgb(40, 81, 102);
}
.entete {
    display: flex;
    justify-content: space-between;
    color:white;
    justify:space-between;
}
.ecrit {
    color: rgb(40, 81, 102);
}
.remember {
    color: rgb(40, 81, 102);
}

</style>
    </head>
    <body>
   
    <header>
        
   <div class="entete">

    <img src="{{ asset('images/logoS.png')}}" height="150" width="160">
<p>
     
        <a href="#connect"><u>Se connecter</u></a>
        <a href="{{ route('register') }}"><u>S'inscrire</u></a>
        <a href="#contact"><u>Contact</u></a>
</p>
</div>
   
        </header>
      
        <main > 
        <p align="center">
        <div class="texxt" align="center">
        <br>
<br>

<h2>
    <div class="ecrit">
<strong>"Bienvenue dans votre page de demande <br>
             d'autorisation de sortie de vehicule. Créez un compte <br>
             puis connectez-vous en quelques instants et bénéficiez d'une navigation fluide"
</strong>
</div>
</h2>

</div>
<br>
<br>
<br>
<br>
<br>
<br>


<div >
<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    
<br>
<br>
        
    <form method="POST" action="{{ route('login') }}" class="container" >
        @csrf
<div align="center" class="connect"><strong><u>CONNEXION</u></strong></div>
        <!-- Email Address -->
        <br>

        <div>
        <div class="test5">
            <x-input-label for="email" :value="__('Email')" />
            <input id="email" class="block mt-1 w-full" type="text" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" oninput="this.type = 'email'" />

            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <br>
        <!-- Password -->
        <div class="test5">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
      
<br>
<br>



        <!-- Remember Me -->
        <div class="testt">
            <label for="remember_me" class="remember">
                <input id="remember_me" type="checkbox" class="remember" name="remember">
                <span class="remember">{{ __('Remember me') }}</span>
            </label>
        </div>
        <br>


<br>
<br>
        <div class="flex items-center justify-end testt">
            @if (Route::has('password.request'))
                <a class="test5" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
            </div>
            </div>
        </div><br>


        <p align="center">
            <br>
            <br>
            <div align="center" class="ecrit">
            Pas encore de compte? Creez en un !
         
            <a  href="{{ route('register') }}">
            <div id="inscrit">
                <u><strong>S'inscrire</strong></u>
            </div>
            </a>  
</div>
           
</div>
        </p>
    </form>

  
    
</x-guest-layout>
</div>
</p>   
 <br>
<br>
<br>
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
<img src="{{ asset('images/maison.png')}}"    height="50" width="50"> 28 Rue vincens, Dakar, Sénégal<br>
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