<?php


$numbers = array(1, 2, 3, 4, 5);
print_r($numbers);

echo $numbers[3] . "\n";

$person = ['first_name' => "James", "last_name" => 'Dill', 'email' => "user@domain.com", 'phome_number' => '347-9580'];

var_dump($person);

$test = [
	'person1' => ['first_name' => "James", 
				"last_name" => 'Garcia', 'email' => "user@domain.com", 'phome_number' => '347-9580'],
	'person2' => ['first_name' => "Bobby", "last_name" => 'Gutz', 'email' => "user@domain.com", 'phome_number' => '818-7490'],
	'person3' => ['first_name' => "Ramon", "last_name" => 'Salinas', 'email' => "user@domain.com", 'phome_number' => '347-9580']
];

echo var_dump($test);

?>