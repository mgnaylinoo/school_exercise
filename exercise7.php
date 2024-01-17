<?php 
	echo "<table border='1' style='border-collapse:collapse'>";
	for($i=1;$i<=10;$i++){
		echo "<tr>";
		$total=0;
		for($j=1;$j<=10;$j++){
			$total+=$i;

			echo "<td>".$total."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
			
?>