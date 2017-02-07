<?php
#give 2 string variables, print each character alternately
#if $a="abc" and $b="def", print "adbecf"

$a="abqwerasdf";
$b="defxcv";
function foo1($a,$b)
{
$line="";
for ($i=0;$i<strlen($a);$i++)
{
	$line=$line.$a[$i];
	if ($i==strlen($a)-1)
	{
		 $line=$line.substr($b,$i,strlen($b)-1);
	}
	else
	{
		$line=$line.$b[$i];
	}
}
return $line;
}
echo foo1($a,$b);
?>
