<?php
$password = $_POST['password'];
if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $password)) {
  echo 'Mot de passe conforme<br>';
}
else {
  echo 'Mot de passe non conforme <br>';
}


if(isset($_POST['user']) && isset($password)){
  echo 'Bienvenue '.$_POST['user'];
}
else {
  echo 'Il manque un champ';
}
?>
