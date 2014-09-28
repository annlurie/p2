<?php
//$test = "Checking all files talk to each other";

// Setting up the contents of the array.
// All items have value 'unpicked' - if an array item is selected
// its value will be changed to 'picked' 
// and it will be ignored in future iterations of 'selectWord.'
$wordlist = array 
(
	'monkey' => 'unpicked',
	'howler' => 'unpicked',
	'spider' => 'unpicked',
	'koala' => 'unpicked',
	'wallaby' => 'unpicked',
	'purse' => 'unpicked',
	'okapi' => 'unpicked',
	'seller' => 'unpicked',
	'face' => 'unpicked'
);

// String for the final password
$password = "";
for ($i = 1; $i < 5; $i++)
{
	$password .=array_rand($wordlist,1)." ";
}




?>