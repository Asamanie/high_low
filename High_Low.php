<? php

// computer must generate a random folder 
rand (1 ,100);

$number = rand (1, 100);

// ask user to guess number between 1-100
fwrite(STDOUT, 'Hello Codeup, guess a number between 1-100 ');

// get the input (number) from user
$guess = fgets(STDIN);
if $guess == $number;
	echo 'Good guess';
{
elseif ($guess >= $number);
	echo 'Lower\n';
elseif ($guess <= $number);
	echo 'Higher\n';
}


