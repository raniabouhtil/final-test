<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" type="text/css" href="http://127.0.0.1/final/public/assets/styleabout.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="about-section">
  <div id="sideNav">
     <nav>
     <ul>
        <li><a href="home">HOME</a></li>
        <li><a href="about">ABOUT</a></li>
        <li><a href="contact">CONTACT</a></li>
        <li><a href="signup">SIGNUP</a></li>
        <li><a href="choicelogin">LOGIN</a></li>
    </ul>
    </nav>
</div>
<div id="menuBtn">
    <img src="images/menu.png" id="menu">
</div>
  <h1>About Us</h1>
  <h1><p><font size=5 color="orange">S&R est la marque spécialiste de vente de crédit en ligne lancée par nous le 1 Avril 2022.

C’est une nouvelle solution 100% en ligne créée pour répondre aux attentes d’un marché de plus en plus dominé par le numérique, où les exigences des clients se font plus grandes en terme de réactivité, d’efficacité, et de simplification des procédures.

S&R est une véritable innovation marché, simple, rapide et immédiate qui permet au client de dématérialiser l’ensemble du processus de traitement de sa demande de crédit en toute sécurité.

S&R permet à ses clients d’accéder à différentes offres tout en bénéficiant des services de "S&R", un espace personnalisé et sécurisé mis à leur disposition.

Ils peuvent ainsi :

Faire leurs simulations de crédit avec un pre-scoring en temps réel
Uploader leurs documents et obtenir un accord définitif
Suivre en temps réel leur demande de crédit et l’évolution de leurs crédits en cours
Procéder à l’ensemble des demandes  
A travers de ce positionnement, S&R se dote d’un univers  de communication et de créativité qui apporte fraicheur et nouveauté dans le marché du crédit à la consommation.

Bienvenue chez S&R.</font></p><h1>
  
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Rania BOUHTIL</h2>
        <p class="title">CEO & Founder</p>
        <p>on est là pour vous aider</p>
        <p>raniabouh@gmail.com</p>
        
      </div>
    </div>
  </div>


  
  <div class="column">
    <div class="card">
      
      <div class="container">
        <h2>Salma BENKAMA</h2>
        <p class="title">CEO & FOUNDER</p>
        <p> On est là pour vous aider</p>
        <p>salma benkama</p>
       
      </div>
    </div>
  </div>
</div>

</body>
</html>
<script>
    var menuBtn = document.getElementById("menuBtn")
    var sideNav = document.getElementById("sideNav")
    var menu = document.getElementById("menu")
    sideNav.style.right ="-250px"; 
    menuBtn.onclick = function(){
        if(sideNav.style.right == "-250px"){
            sideNav.style.right = "0";
            menu.src = "public/assets/close.png";
        }
        else{
            sideNav.style.right = "-250px";
            menu.src ="public/assets/menu.png";
        }
    }
</script>