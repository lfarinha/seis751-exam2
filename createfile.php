<!DOCTYPE html>
<html>
<head><title>Leonardo Farinha</title></head>
<body>
 <?php require('./files/nav.php'); ?>

 <?php // createfile.php
  $fh = fopen("/home/fari0022/www/exam2/data/testfile.txt", 'w+') or die("Failed to create file");

  $text = <<<_END
Line 1
Line 2
Line 3
_END;

  fwrite($fh, $text) or die("Could not write to file");
  fclose($fh);
  chmod('./data/testfile.txt', 0755);
  echo "File 'testfile.txt' written successfully";
?>

</body>
</html>
