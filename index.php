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

          <p>Password is <?php echo $password; ?></p>

          <form method = 'POST' action = 'logic.php'>
               <select name="wordCount">
               <option value="volvo">1</option>
               <option value="saab">2</option>
               <option value="fiat">3</option>
               <option value="audi">4</option>
               </select><br>
               <input type="checkbox" name="number" value="y">Append a number.<br>
               <input type="checkbox" name="specChar" value="y">Append a special character (@).<br>
          </form>

          <img src = "password_strength.png">
     </body>
</html>