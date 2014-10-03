<?php

// VARIABLES!
// Array containing the names of many kinds of monkeys
// default is to consider all words unpicked,
// as they are added to a password in progress, 
// value will be updated to 'picked'
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

// Initialize vars for form elements
// If form has not been submitted (ie isset == false)
// default values for each variable will be used
// Number of words in default PW is 4
if (isset($_POST['count']))
{
	$count = $_POST['count'];
}
else
{
	$count = 4;
}

// Delimiter for default PW is the hyphen
if (isset($_POST['delimiter']))
{
	$delimiter = $_POST['delimiter'];
}
else
{
	$delimiter = '-';
}

// Special character is not used by default
if (isset($_POST['specialChar']))
{
	$specialChar = $_POST['specialChar'];
}
else
{
	$specialChar = '';
}

// A number is defaulted off
// Note that the default value indicates 'false',
// not that 0 should be appended!
if (isset($_POST['number']))
{
	$number = $_POST['number'];
}
else
{
	$number = 0;
}

// FUNCTIONALITY!
// Seed the password with first array item
$firstword = array_rand($wordlist,1);
$password .= $firstword;
$wordlist[$firstword] = 'picked';

// Now add the rest, with delimiter char between words
for ($i = 1; $i < $count; $i++)
{
	// Randomly pick a word from the array, store it in
	// temp variable
	$nextword = array_rand($wordlist,1);

	// Check to see if the word has already been selected
	// If so, decrement loop counter (ie try again)
	if ($wordlist[$nextword] == 'picked')
	{
		$i--;
	}
	// Otherwise add the next word to $password
	else
	{
		$password .= $delimiter.$nextword;
		$wordlist[$nextword] = 'picked';
	}
}

// Append special character
// (if no special character is selected, empty string will be appended)
$password .= $specialChar;

// Append number if that option has been selected
if ($number == '1')
{
	$password .= rand(0,99);
}