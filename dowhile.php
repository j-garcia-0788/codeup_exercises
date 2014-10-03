<?php

$a = 0;
do {
    echo "($a)\n";
    $a++; $a++;
} while ($a <= 100);

$a = 100;
do {
	echo "($a)\n";
	$a-=5;
} while ($a >= -10);
