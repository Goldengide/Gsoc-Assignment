<?php

class GsocAssigment2 {


//Assignment No. 1
	public function palindrome($term) {
			//return strrev($term);
		$count = strlen($term);
		for ($i=0; $i < $count; $i++) { 
		$char = substr($term, $i, 1);
		$charArray[] = $char;
		}
		$charCount = count($charArray);

		$reverseterm = "";
		for ($i=count($charArray)-1; $i >= 0 ; $i--) { 
			$reverseterm.= $charArray[$i];
		}
			
		if (strtolower($term) != strtolower($reverseterm)) {
			return $reverseterm;
		}
		

		elseif (strtolower($term) == strtolower($reverseterm)) {
			return $term." is a palindrome";
		}
		elseif (isset($term) || $term == "") {
			return null;
		}
	}




//Assignment No. 2
	public function Fibonnacci($term) {
		$sum_of_even_fibonnacci =0;
		if ($term == 0 || $term == 1) {
			return 1;
		}

		else {

		$fibonnacci =1;
		$fibonnacci2 =2;

		for ($nth=1; $nth<$term-1; $nth++) { 
		for ($number=1; $number<$term-1; $number++) { 

			//$fibonnacci = 1;
			$c= $fibonnacci2 ;
			$fibonnacci2 = $fibonnacci;
			$fibonnacci = $c;
			$fibonnacci2 = $fibonnacci2 + $fibonnacci;

			$fiboterms[] = $fibonnacci2;
		}
		
		}
		# this code calculate the sum of even fibonnacci numbers
foreach ($fiboterms as $value) {
	if ($value%2 == 0) {

		// echo $value." ";
		$sum_of_even_fibonnacci = $sum_of_even_fibonnacci + $value;

	}

		}
				return "Sum of evenned fibonnacci Numbers is of $term"."th term is $sum_of_even_fibonnacci";	


		}

	}



//Assignment No. 3
		function input($input) {

$code = array(
' ' => 32,
'!' => 33,
'"' => 34,
'#' => 35,
'$' => 36,
'%' => 37,
'&' => 38,
"'" => 39,
'(' => 40,
')' => 41,
'*' => 42,
'+' => 43,
',' => 44,
'-' => 45,
'.' => 46,
'/' => 47,
'0' => 48,
'1' => 49,
'2' => 50,
'3' => 51,
'4' => 52,
'5' => 53,
'6' => 54,
'7' => 55,
'8' => 56,
'9' => 57,
':' => 58,
';' => 59,
'<' => 60,
'=' => 61,
'>' => 62,
'?' => 63,
'@' => 64,
'A' => 65,
'B' => 66,
'C' => 67,
'D' => 68,
'E' => 69,
'F' => 70,
'G' => 71,
'H' => 72,
'I' => 73,
'J' => 74,
'K' => 75,
'L' => 76,
'M' => 77,
'N' => 78,
'O' => 79,
'@' => 64,
'A' => 65,
'B' => 66,
'C' => 67,
'D' => 68,
'E' => 69,
'F' => 70,
'G' => 71,
'H' => 72,
'I' => 73,
'J' => 74,
'K' => 75,
'L' => 76,
'M' => 77,
'N' => 78,
'O' => 79,
'P' => 80,
'Q' => 81,
'R' => 82,
'S' => 83,
'T' => 84,
'U' => 85,
'V' => 86,
'W' => 87,
'X' => 88,
'Y' => 89,
'Z' => 90,
'[' => 91,
'\\' => 92,
']' => 93,
'^' => 94,
'_' => 95,
'`' => 96,
'a' => 97, 
'b' => 98, 
'c' => 99, 
'd' => 100,
'e' => 101,
'f' => 102,
'g' => 103,
'h' => 104,
'i' => 105,
'j' => 106,
'k' => 107,
'l' => 108,
'm' => 109,
'n' => 110,
'o' => 111,
'p' => 112,
'q' => 113,
'r' => 114,
's' => 115,
't' => 116,
'u' => 117,
'v' => 118,
'w' => 119,
'x' => 120,
'y' => 121,
'z' => 122,
'{' => 123,
'|' => 124,
'}' => 125,
'~' => 126 
						  );

		return $code[$input];
	}






	function XorDecryption($term) {
		$count = strlen($term);
		for ($i=0; $i < $count; $i++) { 
		$char = substr($term, $i, 1);
		$input1[] = $char;
		}
	

		          $result = 0;
				foreach ($input1 as $value) {
			
             	$input['$value'] = $this->input($value);
             	$result = $result + $input['$value'];

				}
         
             	
				return $term." returns ".$result." as ASCII code of \"$term\"";
				
	}
# End o fAssignment No. 3


//Assignment No. 4
	public function passcodeDerivation() {



	}



//Assignment No. 5
	public function pictureSpeaks() {


	}


//Assignment No. 6
	public function primeSum() {
$number = 1000;
       // int j;
for($i = 2; $i <= $number; $i++) {
    for($j = 2; $j <= $number; $j++) {
    if($i%$j == 0) {
break;
    }
    }
    if($j == $i) {
echo $i;
    }
}

	}

// factorial function
public function factorial($in) {
    // 0! = 1! = 1
    $out = 1;

    // Only if $in is >= 2
    for ($i = 2; $i <= $in; $i++) {
        $out *= $i;
    }

    return $out;
}




//Assignment No. 7
	public function primeSequence1($nth) {
		$intString = ' ';
for ($i=2; $i<$nth ; $i++) { 

		$primetest = (($this->factorial($i-1) + 1)/$i);
		if (is_integer($primetest)) {
			$intString.= ' '.$i;
		}
		else {

	

		}
}
			return $intString." ";		

	}

		public function primeSequence($nth) {
		$intString = ' ';

		$primeno = 6*$nth+1;


	}





//Assignment No. 8

	public function Effizy($fizzBuzz) {
 $fizzBuzz = intval($fizzBuzz);
if (is_string($fizzBuzz)) {

	return $fizzBuzz." is a string";

}
elseif (is_integer($fizzBuzz)) {
	if(($fizzBuzz%3 != 0) && ($fizzBuzz%5 != 0)) {

			return $fizzBuzz." is not a multiple ";

		}
		else if (($fizzBuzz%3 == 0) || ($fizzBuzz%5 == 0)) {

			return $fizzBuzz." is a multiple";
		}
}
		

	}



/** functions returns numbers not divided by divisor
	@param $dividend the value of the number that is divided,
	@return the value entered for $dividend argument if not divided by divisor
*/






//Assignment No. 9
	public function Armstrong($number) {

		if (is_int($number)) {
			
		 $digit1 = substr($number, 0, 1);
		$digit1 = intval($digit1);

		$digit1cube = $digit1*$digit1*$digit1;

		$digit2 = substr($number, 1, 1);
		$digit2 = intval($digit2);

		$digit2cube = $digit2*$digit2*$digit2;

		$digit3 = substr($number, 2, 1);
		$digit3 = intval($digit3);

		$digit3cube = $digit3*$digit3*$digit3;

		$armstrong = $digit1cube + $digit2cube + $digit3cube; 
		if ($armstrong == $number) {
			return "Number '$number' is an Armstrong";

		}
		elseif ($armstrong != $number) {
			return "\tNumber '$number' is not an Armstrong";

		}


		}


	}



//Assignment No. 10
	public function BubbleSort(array $arr) {
	$n = sizeof($arr);    
    for ($i = 1; $i < $n; $i++) {
        $flag = false;
        for ($j = $n - 1; $j >= $i; $j--) {
            if($arr[$j-1] > $arr[$j]) {
                $tmp = $arr[$j - 1];
                $arr[$j - 1] = $arr[$j];
                $arr[$j] = $tmp;
                $flag = true;
            }
        }
        if (!$flag) {
            break;
        }
    }
     
   // return $arr;

foreach ($arr as $value) {
	
echo $value."\t";
}

}



}

$test = new GsocAssigment2;

echo " 1) ".$test->palindrome("Dogod");
echo "<hr> 2) ".$test->Fibonnacci(6);
$input = array('A','*', 'k');

echo "<hr> 3) ".$test->XORDecryption("\\");
echo "<hr> 4) ".$test->passcodeDerivation();
echo "<hr> 5) ".$test->pictureSpeaks();
//echo "<hr> 6) ".$test->primeSum();
//echo "<hr> 6) ".($test->factorial(30) - 1)/31;
echo "<hr> 7) ".$test->primeSequence(1001);
echo "<hr> 8) ".$test->Effizy("33");
echo "<hr> 9) Test for Armstrong:".$test->Armstrong(222);
$number = array('1','2','8','6','13','27','41','3');
echo "<hr> 10) The sorted array is ";
$test->BubbleSort($number);

?>