<?php
#given a number (N), print stairs like this (n=6):
     #
    ##
   ###
  ####
 #####
######


function stairs($n)
{
  $spaces="";
  for ($i=1;$i<=$n;$i++)
  {
	$spaces=$spaces." ";
  }

  $line = $spaces;
  for ($i=1;$i<=$n;$i++)
  {
  	$line = $line."x";
	echo substr($line, strlen($line)-$n,strlen($line)-1);
	echo "\n";
  }
  
}
stairs(10);
?>
