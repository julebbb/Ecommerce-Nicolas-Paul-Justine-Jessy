<?php session_start();
$title =  array
(
  'nameHTML' => '<a href="index.php"><h1 class="title text-center"><span class="pacifico">E</span>-shoes</h1>
            <p class="slogan text-center">Prends ton pied</p></a>',
  'name' => 'E-shoes'
);

if (!isset($_SESSION['panier'])) {
  $_SESSION['panier'] = 0;
}

if(isset($_POST['go']) AND $_POST['go']=='send'){
  $_SESSION['panier']++;
}

require('../view/headerView.php');
?>
