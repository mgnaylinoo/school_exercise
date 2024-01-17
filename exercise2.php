<?php 
	$total = 0;
	for($i=1;$i<=30;$i++){
		echo $total.'+'.$i.'=';
		$total += $i;
		echo $total.'<br>';
	}
	echo 'Total='.$total;
?>