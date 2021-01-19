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


?>

