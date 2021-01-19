<?php
function average_arr($arr_ave){
	$new_ave = array_filter($arr_ave);

	$average = array_sum($new_ave)/count($new_ave);

	return $average;
}

$arr_value = array('5', '3', '10' , '6');

print_r (average_arr($arr_value)); //Result Item #3
?>