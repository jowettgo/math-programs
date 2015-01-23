<?php

function get_all_prime($x, $limit) {
	
  $sum_of_primes=0;
  set_time_limit(0);
  
  for($x=1; $x<=$limit; $x++) {
  	$counter=0;
    for($y=1; $y<=$x; $y++) {
		if ($x%$y == 0) {
			$counter++;
		}           
    }
	
	if($counter==2) {
		echo $x . "\n";
		$sum_of_primes = $sum_of_primes + $x;
	}
  }
  echo "\nThe sum of all primes under $limit is $sum_of_all_primes";
 }
  
  get_all_prime(1000000);




?>
