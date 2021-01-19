<?php
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
?>