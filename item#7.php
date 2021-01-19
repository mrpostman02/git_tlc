<?php
function split_array_values($arr, $num){

	$left = 0;

	for($i=0;$i < $num; $i++){

		$left +=$arr[$i];

		$right = 0;

		for($j = $i + 1; $j <$num; $j++)	
			$right +=$arr[$j];

		if($left==$right)
			return $i+1;
	}

	return -1;
}

function print_two_phases($arr, $num)
{

	$status = "true";
	$status_fa = "false";

	$splitting_pts = split_array_values($arr, $num);

	if($splitting_pts == -1 ||  $splitting_pts == $num){
		return $status_fa; //false
	}

	for($i=0;$i < $num; $i++)
	{
		if($splitting_pts == $i)
			return $status; //true
	}

}

$arr_item7 = array('1', '2', '3', '1', '0', '2', '3');

$num_parts = count($arr_item7);

echo print_two_phases($arr_item7, $num_parts); //see result for #item 7
?>