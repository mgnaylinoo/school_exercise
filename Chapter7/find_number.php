<?php
	function in_between($num1,$num2){
		$two_number=array($num1,$num2);
		$success=array();
		foreach($two_number as $number){
			if($number>=20 && $number<=30){
				array_push($success,$number);
			}

		}
		if(count($success)==2){
			sort($success);
			echo $success[1];
		}else{
			echo 0;
		}
		echo "<br>";

	}
	in_between(78,95);
	in_between(20,30);
	in_between(21,25);
	in_between(28,28);

?>