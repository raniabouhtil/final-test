<?php 

    if(isset($_POST['submit'])){
        $createUser = new UsersController();
        $createUser->register();
    }
?>


<!DOCTYPE html><html lang="en">
<head>
  <head> <link rel = "stylesheet" type = "text/css" href = "http://127.0.0.1/final/public/assets/styles2.css" > </head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- For google icons  -->
  
  <title>Inscription </title>

  </head>
  <h2 class="logo">S&R</h2>
  <body><div id="sideNav">
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
  <!-- for background -->
  <div class="background">
  <?php include('./views/includes/alerts.php');?>

  <!-- for form container -->
  <div class="container">
    <h2>Inscription</h2>
    <form method="post"  enctype="multipart/form-data">

      <div class="form-item">
        
        <input type="text" name="nom" placeholder="Nom" >
      </div>

      <div class="form-item">
        
        <input type="text" name="prenom" placeholder="Prénom" >
      </div>
       <div class="form-item">
        
        <input type="text" name="cin" placeholder="CIN" minlength="8" maxlength="8" >
      </div>
       <div class="form-item">
        
        <input type="text" name="numerodecompte" placeholder="Numéro de compte bancaire" minlength="16" >
      </div>
      <div class="form-item">
        <input type="text" name="sexe" placeholder="Sexe" >
        
      </div>
            <div class="form-item">
        <input type="text" name="nationalite" placeholder="Nationalité" >
        
      </div>
       <div class="form-item">
        
        <input type="text" name="etatc" placeholder="Etat_civil" >
      </div>
      <div class="form-item">
        
        <input type="text" name="email" placeholder="email">
      </div>
      <div class="form-item">
        <input type="text" name="numtel" placeholder="Numéro de téléphone" >
        
      </div>
      <div class="form-item">
        <input type="text" name="salaire" placeholder="Salaire" >
        
      </div>
      <div class="form-item">
        <input type="text" name="Adresse" placeholder="Adresse" >
        
      </div>
      <div class="form-item">
       
             <input type="date" name="dn" placeholder="Date de naissance" >
      </div>
       <div class="form-item">
       <input type="text" name="username" placeholder="Username "  >
      </div>
      <div class="form-item">
       <input type="password" name="password" placeholder ="Mot de passe" minlength="4" >
      </div>
      

      <button type="submit" name="submit"><strong>S'inscrire</strong></button>

      <div class="options">
        
      </div>

      <p >Vous avez déjà un compte? <a href="login">Login </a></p>

    </form></div> 
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
