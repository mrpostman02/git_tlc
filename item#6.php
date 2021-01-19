<?php
$arr_values = array('1', '2', '3' , '4', '5');
$count_size = count($arr_values);

count_even_odd($arr_value, $count_size); 


function factorial($integer){

	$factorial_val = 1;

	for($i=$integer; $i>=1; $i--){

		$factorial_val = $factorial_val * $i;

	}

	return $factorial_val;

}


$integer_val = 6;

echo factorial($integer_val); //Result item #6



?>