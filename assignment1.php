<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Assignment 1</title>
</head>
<style type="text/css">
	body{
		background-color: blue;
	}
	h2{
		text-align: center;
		color: white;
	}
	h4{
		text-align: center;
		color: white ;
	}
	div{
		color: white;
		font-size: 20px;
	}
</style>
<body>
	<h2>Generate and display the first n lines of a Floyd triangle</h2>
	<?php
		$rows=array(5,11);
		foreach($rows as $n){
			$total=1;
			echo '<h4>(n='.$n.')</h4>';
			echo '<div>';
			for($i=1;$i<=$n;$i++){
				for($j=1;$j<=$i;$j++){
					echo $total.' ';
					$total++;

				}
				echo '<br>';
			}
			echo '</div>';
		}
		
		
	?>

</body>
</html>