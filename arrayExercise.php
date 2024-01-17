<?php
	$season=array('summer','spring','winter');
	//print_r($season);
	$useOfOS=array('Ba Maung'=>'Window','Kaung Han'=>'Linux','Zin Pwint'=>'Mac');
	$useOfOS['Toe Aung']='window';
	//print_r($useOfOS);
	foreach($season as $weather){
		//echo $weather.',';
	}
	echo '<br>';
	foreach($useOfOS as $user=>$operating){
		//echo $user.'='.$operating.'<br>';
	}
	echo var_dump($useOfOS);
?>