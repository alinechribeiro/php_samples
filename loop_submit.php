	<?php
		##declaring variables
		$a = $_POST["first"];
		$b = $_POST["second"];
		##show all numbers between given numbers
		$total=0;
		for ($i=$a; $i<=$b; $i++){
			echo $i."<br>";
			$total=$total+$i;
		} 
		echo $total;
			echo "<hr>";
	##++ sum all numbers between them using while loop:
		$total = 0;
		while ($a<=$b){
			echo $a."<br>";
			$total=$total+$a;
			$a++;
		} 
		echo $total;
		echo "<hr>";
	?>
