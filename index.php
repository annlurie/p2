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
          <h1><?php echo $test ?></h1>
     </body>
</html>