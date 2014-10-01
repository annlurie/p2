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

          <form method = 'POST' action = 'index.php'>
               <input type="checkbox" name="number" value="y">Append a number.<br>
               <input type="checkbox" name="specChar" value="y">Append a special character (@).<br>
               <select name="wordCount">
               <option value="4">4</option>
               <option value="5">5</option>
               <option value="6">6</option>
               <option value="7">7</option>
               <option value="8">8</option>
               <option value="9">9</option>
               </select> Number of Words<br>
               <input type='submit' value='I want a different password!'><br>
          </form>
          <pre>
          <?php print_r($wordlist); ?>
          </pre>
          <img src = "password_strength.png">
     </body>
</html>