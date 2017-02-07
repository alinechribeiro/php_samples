<?php
//given an array ($numbers), count how many numbers are repeated within the array
//if  $numbers=array(12,12,12,12,10,20,30,10)  , 
//the program shall return 2 (as 12 and 10 are repeated)

$numbers=array(12,12,12,12,10,20,30,10);
$counted=array();
sort($numbers);
for ($i=1;$i<sizeof($numbers);$i++)
{
	if($numbers[$i] == $numbers[$i-1])
	{
		if(! in_array($numbers[$i],$counted))
		{
			array_push($counted,$numbers[$i]);
		}
	}
}
echo sizeof($counted);
?>
