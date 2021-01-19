<?php
function count_even_odd($arr_values, $arr_size){


	$even = 0;
	$odd = 0;

	for($i=0;$i < $arr_size; $i++) 
	{

		if($arr_values[$i] & 1 == 1){
			$odd ++;
		} 
		else{
			$even ++;
		}
	}

	echo "Number of even numbers".$even; //Result item #5
	echo "Number of odd numbers".$odd; //Result item #5

}


?>