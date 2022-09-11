<?php
class Solution {
function romanToInt($s) {
	$romanTable = [
		'I' => 1,
		'IV' => 4,
		'V' => 5,
		'IX' => 9,
		'X' => 10,
		'XL' => 40,
		'L' => 50,
		'XC' => 90,
		'C' => 100,
		'CD' => 400,
		'D' => 500,
		'CM' => 900,
		'M' => 1000,
	];

	$s = strrev($s);
	$number = $romanTable[$s[0]];

	$length = strlen($s);

	for($i=1; $i<=$length; $i++) {
		if($romanTable[$s[$i]] < $romanTable[$s[$i-1]]) {
			$number -= $romanTable[$s[$i]];
		}else{
			$number += $romanTable[$s[$i]];
		}
	}

return $number;
  }
}
?>
