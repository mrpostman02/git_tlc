<?php


$arr = array('5', '3', '10' , '6');


$max_one = $max_2 = 0;


for($i=0; $i<count($arr); $i++){
	if($arr[$i] > $max_one){
		$max_2 = $max_one;
		$max_one = $arr[$i];
	}else if ($arr[$i] > $max_2 && $arr[$i] !=$max_one){
		$max_2 = $arr[$i];
	}
}

echo $max_2; //result for Item #1




function create_combinations($arr, $i=0){
	if(!isset($arr[$i])){
		return array();
	}

	if($i == count($arr) - 1){
		return $arr[$i];
	}

	$sub_seq = create_combinations($arr, $i + 1);

	$result = array();

	foreach ($arr[$i] as $value) {
		foreach ($sub_seq as $sub_seqs) {

			$result[] = is_array($sub_seqs) ?
			array_merge(array($value), $sub_seqs) :
			array($value, $sub_seqs);
		}
	}

	return $result;
}

print_r(

	create_combinations(
		array(
			array('1', '2', '3'),
			array('2', '3', '4')
		)
	)
); //Result Item #2


function average_arr($arr_ave){
	$new_ave = array_filter($arr_ave);

	$average = array_sum($new_ave)/count($new_ave);

	return $average;
}

$arr_value = array('5', '3', '10' , '6');

print_r (average_arr($arr_value)); //Result Item #3



//Pass item #4


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

	echo $even; //Result item #5
	echo $odd; //Result item #5

}


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



// still reading the item questionaires

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

