<?php
echo "O valor de CAMPO 1 é: " . $_POST["campo1"];
echo "<br>O valor de CAMPO 2 é: " . $_POST["campo2"];


if (isset($_POST['name'], $_POST['email'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];

	// show the $name and $email
	echo "Thanks $name for your subscription.<br>";
	echo "Please confirm it in your inbox of the email $email.";
} else {
	echo 'You need to provide your name and email address.';
}




?>