<?php 
	if(isset($_POST['id'])){
		$exitClient = new ClientController();
		$cl = $exitClient->getOneClient();
	}else{
		Redirect::to('applications');
	} 

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{
  background: linear-gradient(to top, rgba(0,0,0,0.5)50%, rgba(0,0,0,0.5)50%),url('public/assets/images/bn.png');
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: white;
  font-size: 18px;
}
.card h1{
  color: white;
}
.card h2{
  color: white;
}


button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #fff;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: white;
}

button:hover, a:hover {
  opacity: 0.7;
}

#sideNav{
    width:250px ;
    height:100vh;
    position:fixed;
    right:-250px;
    top: 0;
    background: #ff8000;
    z-index: 2;
    transition: 0.5s;
}
nav ul li{
    list-style: none;
    margin: 50px 20px;
}
nav ul li a{
    text-decoration: none;
    color: #fff;
}
#menuBtn{
    width: 50px;
    height: 50px;
    background: #ff8000;
    text-align: center;
    position: fixed;
    right: 30px;
    top: 20px;
    border-radius: 3px;
    z-index: 3;
    cursor: pointer;
}
#menuBtn img{
    width: 20px;
    margin-top: 20px;
}
@media screen and (max-width: 770px) {
    .banner-text h1{
    font-size: 44px;
    a{
        display: block;
        margin: 20px auto;
    }

}
</style>
</head>
<body>


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

<div class="card">
 <h2 style="text-align:center" >Le profile du client n°<?php echo $cl->id ?> </h2>
  <img src="public/assets/images/user.png" height="100px" width="100px">
   
  <h1><?php echo $cl->nom; echo  $cl->prenom?></h1>
  <p class="title">Email:<?php echo $cl->email?></p>
  <p class="title"> Etat civile: <?php echo $cl->Etat_civil?> </p>
  <p class="title"> Nationalité: <?php  echo $cl->Nationalité?> </p>
  <p class="title"> Numéro de téléphone: <?php echo $cl->Numtel?> </p>
  <p class="title"> Adresse: <?php echo $cl->Adresse?> </p>
  <p class="title"> Date de naissance: <?php echo $cl->Datenaissance?> </p>
  <p class="title"> Salaire: <?php echo $cl->Salaire?> </p>
  
 
  
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