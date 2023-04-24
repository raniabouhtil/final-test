<?php 
	if(isset($_POST['find'])){
		$data = new ClientController();
		$client = $data->findClient();
	}else{
		$data = new ClientController();
		$client = $data->getAllClient();
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liste des clients| S&R</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://127.0.0.1/final/public/assets/test.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
  <input type="checkbox" id="menu" name="">
  <div class="sidebar">
    <div class="sidebar-brand">
      <h2><span class="fa fa-user-o"></span>S&R</h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="adminpage" class="active"><span class="fa fa-home"></span><span>Dashboard</span></a>
        </li>
        <li>
          <a href="loans"><span class="fa fa-tasks"></span><span>Les types de crédits</span></a>
        </li>
        <li>
          <a href="applications"><span class="fa fa-th-large"></span><span>Les demandes de crédits</span></a>
        </li>
        <li>
          <a href="demandeaccepte"><span class="fa fa-line-chart"></span><span>Les crédits accéptés</span></a>
        </li>
        <li>
          <a href="client"><span class="fa fa-address-book"></span><span>Les clients</span></a>
        </li>
       
      </ul>
    </div>
  </div>



  <div class="content">
    
    <header>
      <p><label for="menu"><span class="fa fa-bars"></span></label><span class="accueil">Accueil</span></p>

    <div class="search-wrapper">
        <span class="fa fa-search"></span>
      <form method="post" class="float-right mb-2 d-flex flex-row">
            <input type="search" class="form-control" name="search" placeholder="Recherche">
            <button  name="find" type="submit"><i class="fas fa-search"></i></button>
          </form>
        </div>

      <div class="user-wrapper" id="dropdown">
        <div>
          <small>Admin</small>
        </div>
        
        <img src="public/assets/admin.png" width="30" height="30" class="logo-admin">
        <div class="dropdown-content">
        <p><a href="choicelogin">Deconnexion</a></p>
        </div>
        
      </div>
    </header>

					
					<table class="table table-hover">
					  <thead>
					    <tr>




					    	<div class="composant">
        <div class="ventes">
          <div class="case">
            <div class="header-case">
              <h2>Listes des clients</h2>
              
            </div>
            <div class="body-case">
              <div class="tableau">
                <table width="100%">
                  <thead>
                    <tr>
                 <th scope="col">Nom & Prénom</th>
					      <th scope="col">Sexe</th>
					      <th scope="col">Nationalité</th>
					      <th scope="col">Etat civil</th>
					      <th scope="col">Email</th>
					      <th scope="col">Numéro de téléphone</th>
					      <th scope="col">Salaire</th>
					      <th scope="col">Adresse</th>
					      <th scope="col">Date de naissance</th>
					      <th scope="col">Username</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($client as $cl):?>
					    	<tr>
						      <th scope="row"><?php echo $cl['nom'].' '.$cl['prenom']; ?></th>
						      <td><?php echo $cl['Sexe'];?></td>
						      <td><?php echo $cl['Nationalité'];?></td>
						      <td><?php echo $cl['Etat_civil'];?></td>
						      <td><?php echo $cl['email'];?></td>
						      <td>
						      	<?php echo $cl['Numtel'];?></td>
						      	<td><?php echo $cl['Salaire'];?></td>
						      	<td><?php echo $cl['Adresse'];?></td>
						      	<td><?php echo $cl['Datenaissance'];?></td>
						      	<td><?php echo $cl['username'];?></td>
						      
						    </tr>
					   	<?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>



        
    
					    
					  
				
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


