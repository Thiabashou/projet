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
    color: white;
  }
  
  a {
    text-decoration: none; /* Supprime la décoration de lien par défaut */
    color: white; /* Couleur du texte des liens */
  }

header {    
background-color: rgb(31, 113, 141);
flex-direction: row;
margin: auto;
padding: 15px;
height: 115px;
width: 100%;
} 



main {
background-color: rgb(255, 255, 255);
padding:500px;
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

.test0 {
    display: flex;
    justify-content: flex-end;
}

.test1 {
    display: flex;
    align-items: center;
}
.test2 {

}



    </style>
    </head>
    <body>
    <header>
        
    <p>
    <img src="{{ asset('images/logoS.png')}}" height="110" width="200">

    </p>

        
                 
        </header>
        <main class="contenu"> 
     <h1>BIENVENUE
<br>
     </h1>    
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
           <img src="{{ asset('images/maison.png')}}" height="50" width="50"> 28 Rue vincens, Dakar, Sénégal<br>
           <img src="{{ asset('images/telephone.png')}}" height="50" width="50"> 33 867 66 66 <br>
           <img src="{{ asset('images/mail.png')}}" height="50" width="50"> contact@senelec.sn<br>
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