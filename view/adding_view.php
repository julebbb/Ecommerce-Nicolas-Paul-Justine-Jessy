<?php
require('controller/config.php');
if ($_SESSION['isConnect'] = true)
{
	$_SESSION['isConnect'] = false;
}

$req = $bdd->query('SELECT * FROM users');
$rep = $req->fetchAll();

include 'controller/header.php';

if(isset($_SESSION['isConnect']) OR $_SESSION['isConnect'] = false): ?>
<form class="text-center margin" method="post" action="adding.php">
	<input type="text" name="identifiant"/>
	<input type="password" name="password"/>
	<button type="submit">se connecter</button>
</form>

<?php
endif;

?>
