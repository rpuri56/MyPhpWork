<?php
/****** Example of Fabonassi series

Steps  Values

0 		0
1       1
2 		1	
3 		2
4 		3
5 		5
6 		8
7 		13
8 		21
9 		34
*****/


/**** 
@param - $step
output - result

****/


function calculateFibonacci( $step ) {
	
	$arrintValue[0] = 0;
	$arrintValue[1] = 1;
	
	for ( $i=2; $i <= $step; $i++ ) {
		$arrintValue[$i] 	= $arrintValue[$i - 2] + $arrintValue[$i - 1];		
	}	

	return $arrintValue;
}

$step = 6;
$result = calculateFibonacci( $step )[$step];

echo 'Result => ' . $result;

?>