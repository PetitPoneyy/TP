<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<form action="" method="post">
<input type="number" name="num"/>
<input type="submit"/>
</form>


<?php
if (isset($_POST['num']))
{
  $numero = $_POST['num'];

  $mois = array ('Janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre','novembre','decembre');

  echo 'le mois est ' .$mois[$numero];
}


?>

    </body>
</html>
/*cette ligne est un test*/
