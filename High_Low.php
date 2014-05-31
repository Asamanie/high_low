<?php

// tell user to guess a number bewtwwen 1-100
fwrite(STDOUT, "Guess a number between 1 and 100 \n");

// generate a random number between 1-100
$number = mt_rand(1,100);
// get input from user
$guess = fgets(STDIN);

// loop through until number is guessed correctly (or until statement is TRUE)
while ($guess != $number) {

	if ($guess < $number) {
		echo "Higher\n";
		$guess = fgets(STDIN);
	} elseif ($guess > $number) {
		echo "Lower\n";
		$guess = fgets(STDIN);
	}	
}
echo "You have guessed correctly!\n";	





// ******* all this has been commited out to start exercises again for practice and review.  
// ******* all code as been written on another file, than CUT and PASTED into this exercise


// if (!is_numeric($argv[1]) || !is_numeric($argv[2]))
// 	exit (1);

// // ask user to guess number between 1-100
// fwrite(STDOUT, 'Hello Codeup, guess a number between ' . $argv[1] . '-' . $argv[2]);

// // $argv[1] is min. $argv [2] is max
// $number = mt_rand($argv[1], $argv[2]);

// // get the input (number) from user, will not run until user inputs (number)
// $guess = fgets(STDIN);
// $times_guessed = 1;

// // check to see if guess is correct 
// while ($guess != $number) {
// 	$times_guessed++;

// 	// if the guess is higher than $number then tell the user "lower"
// 	if ($guess > $number) {
// 		echo "Lower\n";
// 		$guess = fgets(STDIN);

// 	// if the guess is lower than the $number then tell the user "higher"
// 	} elseif ($guess < $number) {	
// 		echo "Higher\n";
// 		$guess = fgets(STDIN);
// 	}
// }

// //if the guess and the $number are the same say "You have..." and end the game
// echo "You have guessed correct in $times_guessed times, play again!\n" ;

// exit (0);

?>