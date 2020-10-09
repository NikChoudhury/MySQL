<?php
// FizzBuzz challenge
// Your challenge is to loop through the number 1 to zero
// If a number is a multiple of 3 then output FIZZ instead of the number
// If a number is a multiple of 5 then output BUZZ instead of the number
// If a number is a multiple of 3 and five then output FIZZBUZZ instead of the number
// Your Output will lool something like this
// 1 2 FIZZ 4 BUZZ FIZZ 7 8 FIZZ BUZZ 11 FIZZ 13 14 FIZZBUZZ 16 17 FIZZ 19 BUZZ FIZZ 22 23 FIZZ BUZZ 26 FIZZ 28 29 FIZZBUZZ 31 32 FIZZ 34 BUZZ FIZZ 37 38 FIZZ BUZZ 41 FIZZ 43 44 FIZZBUZZ 46 47 FIZZ 49 BUZZ FIZZ 52 53 FIZZ BUZZ 56 FIZZ 58 59 FIZZBUZZ 61 62 FIZZ 64 BUZZ FIZZ 67 68 FIZZ BUZZ 71 FIZZ 73 74 FIZZBUZZ 76 77 FIZZ 79 BUZZ FIZZ 82 83 FIZZ BUZZ 86 FIZZ 88 89 FIZZBUZZ 91 92 FIZZ 94 BUZZ FIZZ 97 98 FIZZ BUZZ 



function fizzbuzz(){
	$fizz = "FIZZ";
	$buzz = "BUZZ";
	$num = 1;
	while($num <= 100){

		if ($num%3 ==0 && $num%5 ==0) {
			echo $fizz.$buzz. " ";
		}elseif ($num%3 == 0) {
			echo $fizz. " ";
		}elseif ($num%5 ==0) {
			echo  $buzz. " ";
		}else{
			echo $num ." ";
			// die();
		}
		$num++;

	}
}

fizzbuzz();


