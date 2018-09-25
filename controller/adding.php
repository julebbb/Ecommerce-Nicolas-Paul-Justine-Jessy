<?php
require('config.php');
require('../model/addingModel.php');
require('../view/adding_view.php');


if ($_SESSION['isConnect'] = true)
{
	$_SESSION['isConnect'] = false;
}

include '../controller/header.php';

if(isset($_SESSION['isConnect']) OR $_SESSION['isConnect'] = false):
  echo connectUser();
endif;

$rep = check_user();

if (isset($_POST['identifiant']) AND isset($_POST['password'])) {

    if ($_POST['identifiant'] == $rep[0]['name'] AND $_POST['password'] == $rep[0]['password'])	{

      $_SESSION['isConnect'] = true;

      echo formProduct();

    }

      else {

       echo "<p class='text-center'>Mot de passe éronné.</p>";

    }
  } else{

    echo "<p class='text-center'>Vous devez vous connecter afin de pouvoir ajouter des articles.</p>";
  }

include 'footer.html';


 ?>
