<?php

// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'Want to play a game? ');

// Get the input from user
$answer = trim(fgets(STDIN));


// Output the user's name
if(strtolower($answer == 'yes')) {
	fwrite(STDOUT, "Great, let's play");

}	else {
	fwrite(STDOUT, "boooooo!");
}