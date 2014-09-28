<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
     <head>
          <meta charset='utf-8'>
          <title>Ann Lurie Project 2</title>
          <link href="styles.css" rel="stylesheet" type="text/css">
          <?php require('logic.php'); ?>
     </head>
     <body> 
          <h1>Project 2: Password Generator, XKCD-Style</h1>
          Password is <?php echo $password; ?>
     </body>
</html>