<?php

function check_user() {
	require('../controller/config.php');

	$req = $bdd->query('SELECT * FROM users');
	$rep = $req->fetchAll();

	return $rep;
}


?>
