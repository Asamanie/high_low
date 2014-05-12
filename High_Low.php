<?php

// ask user to guess number between 1-100
fwrite(STDOUT, 'Hello Codeup, guess a number between ' . $argv[1] . '-' . $argv[2]);

$number = mt_rand($argv[1], $argv[2]);

// get the input (number) from user
$guess = fgets(STDIN);
$times_guessed = 1;

// check to see if guess is correct 
while ($guess != $number) {
	$times_guessed++;

	// if the guess is higher than $number then tell the user "lower"
	if ($guess > $number) {
		echo "Lower\n";
		$guess = fgets(STDIN);

	// if the guess is lower than the $number then tell the user "higher"
	} elseif ($guess < $number) {	
		echo "Higher\n";
		$guess = fgets(STDIN);
	}
}

//if the guess and the $number are the same say "You have..." and end the game
echo "You have guessed correct in $times_guessed times, play again!\n" ;

exit (0);

