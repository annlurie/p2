<?php

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

for ($i = 1; $i < 10; $i++)
{
	// Randomly pick a word from the array
	$nextword = array_rand($wordlist,1);
	// Check to see if the word has already been selected
	// If so, decrement the for loop counter (ie try again)
	if (strpos($password, $nextword) !== false)
	{
		$i--;
	}
	// Otherwise add the next word to $password
	else
	{
		$password .= $nextword.' ';
	}
}

if (4==4)
{
	$password .= "@";
}
	
if (6==6)
{
	$password .= rand(0,9);
}



?>