/* Smallest multiple */

<?php

GLOBAL $prime_numbers;
$prime_numbers = array();
$prime_counter = 0;



for($x=1; $x <= 1000; $x++) {

	$counter = 0;
	for($y=1; $y <= $x; $y++) {
		if ($x % $y == 0) {
			$counter++;
		}
	}

			if($counter == 2 ) {
			$prime_numbers[$prime_counter] = $x;
			$prime_counter++;
		}
}

$primes = count($prime_numbers);
for($n=0; $n<$primes; $n++) {
	echo $prime_numbers[$n] . "  ";
}

echo "<br/>";

function smallest_multiple($number1, $number2) {
	GLOBAL $prime_numbers;
	$x = 0;
	$least_multiple = 1;

	while ($number1 % $prime_numbers[$x] == 0 || $number2 % $prime_numbers[$x] == 0) {
		$number1 = $number1/$prime_numbers[$x];
		$number2 = $number2/$prime_numbers[$x];
		$least_multiple = $least_multiple * $prime_numbers[$x];
		if ($number1 % $prime_numbers[$x] != 0 && $number2 % $prime_numbers[$x] != 0) {
			$x++;
		} 
	}

	echo $least_multiple;

}

smallest_multiple(200, 100); 
