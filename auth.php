<!DOCTYPE html>
<html>
<head><title>Leonardo Farinha</title></head>
<body>
 <?php require('./files/nav.php');?>

 <?php // phpauth.php
    require('./files/login.php');

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
