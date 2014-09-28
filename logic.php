<?php

// Default length for pw generated on initial page load
$_POST['wordCount'] = 4;
//$_POST['specChar'] = '';
//$_POST['number'] = '';

$wordlist = array 
(
	'capuchin' => 'unpicked',
	'howler' => 'unpicked',
	'spider' => 'unpicked',
	'mandrill' => 'unpicked',
	'rhesus' => 'unpicked',
	'baboon' => 'unpicked',
	'macaque' => 'unpicked',
	'squirrel' => 'unpicked',
	'tamarin' => 'unpicked',
	'colobus' => 'unpicked'
);

// String for the final password
$password = '';

// Seed the password with first array item
$firstword = array_rand($wordlist,1);
$password .= $firstword;
$wordlist[$firstword] = 'picked';

// Now add the rest, with spacing between words
for ($i = 1; $i < $_POST['wordCount']; $i++)
{
	// Randomly pick a word from the array
	$nextword = array_rand($wordlist,1);
	// Check to see if the word has already been selected
	// If so, decrement loop counter (ie try again)
	// Alt test for word use:
	//if (strpos($password, $nextword) !== false)
	if ($wordlist[$nextword] == 'picked')
	{
		$i--;
	}
	// Otherwise add the next word to $password
	else
	{
		$password .= '-'.$nextword;
		$wordlist[$nextword] = 'picked';
	}
}

if ($_POST["specChar"] == 'y')
{
	$password .= '@';
}
	
if ($_POST["number"] == 'y')
{
	$password .= rand(0,9);
}

?>