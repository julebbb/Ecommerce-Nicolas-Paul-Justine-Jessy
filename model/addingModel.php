<?php

function addProd($rep) {

	if (isset($_POST['identifiant']) AND isset($_POST['password'])) {

			if ($_POST['identifiant'] == $rep[0]['name'] AND $_POST['password'] == $rep[0]['password'])	{

				$_SESSION['isConnect'] = true;

				ob_start(); ?>

				<form class="col-6 offset-3 text-center" method="post" action="answer.php" style="margin-bottom:105px; margin-top:60px;">
				<label for="name">Indiquer le nom du produit.</label>
				<input type="text" name="name"/>
				<br />

				<label for="price">Indiquer le prix du produit.</label>
				<input type="text" name="price"/>
				<br />

				<label for="picture">Indiquer le nom de l'image.</label>
				<input type="text" name="picture"/>
				<br />


				<label for="size">Indiquer les pointures disponibles</label>
				<input type="text" name="size"/>
				<br />

				<label for="color">Indiquer les couleurs disponibles</label>
				<input type="text" name="color"/>
				<br />

				<label for="description">Décrire le produit</label>
				<br />
				<input type="text" name="description"></textarea>
				<br />

				<label for="disponibility">Indiquez la disponibilité ou non du produit.</label>
				<br />
				<select name="disponibility" size="1">
					<option>Oui
					<option>Non
				</select>
				<br />
				<button type="submit">Envoyer le formulaire</button>
			</form>

			<?php  return $form = ob_get_clean(); }

			else {

			 $form = "<p class='text-center'>Mot de passe éronné.</p>";
			 return $form;
		}
	} else{

		$form = "<p class='text-center'>Vous devez vous connecter afin de pouvoir ajouter des articles.</p>";
		return $form;
	}
}

 ?>
