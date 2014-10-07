<?php

//make array with days of the week
$days_of_week = [
	'Sunday', 
	'Monday', 
	'Tuesday', 
	'Wednesday',
	'Thursday',
	'Friday', 
	'Saturday',
];

// set day to 0 (sunday) and pay to zero
$today = 0; //Sunday
$money = 0; //amount of money

//loop till I have 100 dollars
while ($money <= 100) {


	//check if it is friday
	if($days_of_week[$today] == 'Friday'){
		$money += 20;
	}
	
	echo $days_of_week[$today] . "\n";
	echo $money . "\n";
	echo "-------------\n";
	
	//set to Sunday after Saturday
	$today = (today == 6) ? 0 : $today;
	//if($today == 6) {
	//	$today = 0;
	//}
	//sleep(1);
	
	$today++;


}