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

// Seed the password with first array item
$password .= array_rand($wordlist,1);

// Now add the rest, with spacing between words
for ($i = 1; $i <= $_POST["wordCount"]-1; $i++)
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
		$password .= '-'.$nextword;
	}
}

if ($_POST["specChar"] == 'y')
{
	$password .= "@";
}
	
if ($_POST["number"] == 'y')
{
	$password .= rand(0,9);
}

?>