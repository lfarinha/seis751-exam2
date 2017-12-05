<!DOCTYPE html>
<html>
<head><title>Leonardo Farinha</title></head>
<body>
 <?php require('./files/nav.php'); ?>

 <?php // createfile.php
  $fh = fopen("./data/testfile.txt", 'w') or die("Failed to create file");

  $text = <<<_END
Line 1
Line 2
Line 3
_END;

  fwrite($fh, $text) or die("Could not write to file");
  fclose($fh);
  echo "File 'testfile.txt' written successfully";
?>



// code for phpauth.php

<?php // phpauth.php
  $username = 'admin';
  $password = 'letmein';

  if (isset($_SERVER['PHP_AUTH_USER']) &&
      isset($_SERVER['PHP_AUTH_PW']))
  {
    if ($_SERVER['PHP_AUTH_USER'] == $username &&
        $_SERVER['PHP_AUTH_PW']   == $password)
          echo "You are now logged in";
    else die("Invalid username / password combination");
  }
  else
  {
    header('WWW-Authenticate: Basic realm="Restricted Section"');
    header('HTTP/1.0 401 Unauthorized');
    die ("Please enter your username and password");
  }
?>

</body>
</html>
