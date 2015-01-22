<?php

function get_all_prime($limit) {

  for($x=1; $x<=$limit; $x++) {
  	$counter=0;
    for($y=1; $y<=$x; $y++) {
		if ($x%$y == 0) {
			$counter++;
		}           
    }
	
	if($counter==2) {
		echo $x . "\n";
	}
  }
 }
  
  get_all_prime(1000);




?>
