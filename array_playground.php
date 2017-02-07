<?php

##declaring an empty array
$a=array( );


$b=0;
##populating the array with some data
for ($i=1;$i<=100;$i++){
	$a[$i]=$i;
}
 ##sum all the elements 
for ($i=1;$i<=100;$i++){
	$b=$b+$a[$i];
}
echo 'Total is: ' . $b;

###############################################################3
#choose a random number from 1 to 100
$chosen=rand(1,100);

#take the $chosen out of the array
unset($a[$chosen]);

##sum one more time after we took $chosen off
$c=0;
for ($i=1;$i<=100;$i++){
	$c=$c+$a[$i];
}
echo "New total is ".$c;
##Comparing
$d=$b-$c;
echo "Chosen element was ".$d;
?>