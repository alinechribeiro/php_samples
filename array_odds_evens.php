<?php

##sum all even elements and all odds
$a=array();
##populating array
for ($i=0;$i<100;$i++){
	$a[$i]=$i;
}
##sum evens 
$sum_even=0;
	for($i=0;$i<100;$i+=2){
		$sum_even+=$a[$i];
	}

$sum_odd=0;
	for($i=1;$i<100;$i+=2){
		$sum_odd+=$a[$i];
	}
echo 'Sum of Odds is '.$sum_odd;
echo 'Sum of Evens is '.$sum_even;
?>