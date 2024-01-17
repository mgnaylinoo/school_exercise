<?php
	$records="78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
	$records_array=explode(',',$records);
	sort($records_array);
	$length_temp=count($records_array);
	$total_temp=0;
	foreach($records_array as $temp_value){
		$total_temp+=$temp_value;
	}
	echo 'Average temperature:'.($total_temp/$length_temp)."<br>";
	echo 'List of lowest five temperature:';
	for($i=0;$i<5;$i++){
		echo $records_array[$i].',';
	}
	echo "<br>";
	echo 'List of highest five temperature';
	$count_from_last=0;
	$last_index=$length_temp-1;
	for($last_index;$count_from_last<5;$last_index--){
		echo $records_array[$last_index].',';
		$count_from_last++;

	}
	echo "<br>";



?>