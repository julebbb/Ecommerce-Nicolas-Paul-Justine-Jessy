<?php
$req = $bdd->query('SELECT * FROM products ORDER BY id LIMIT 0,4');

$rep = $req->fetchAll();
