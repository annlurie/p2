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

// Vars for form elements
$count = $_POST['count'];
$delimiter = $_POST['delimiter'];
$specialChar = $_POST['specialChar'];
$number = $_POST['number'];

// FUNCTIONS!
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

// 
if ($number == '1')
{
	$password .= rand(0,99);
}