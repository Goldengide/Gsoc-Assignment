<?php

class GsocAssignment1 {
/** functions returns the value of its arguments
	@param $fizzBuzz 

	@return $fizzBuzz 
*/
	function FizzBuzz($fizzBuzz) {


		return $fizzBuzz."<br>";
	
	}


/** functions returns numbers not divided by divisor
	@param $dividend the value of the number that is divided,
	@return the value entered for $dividend argument if not divided by divisor
*/
	function multiples($dividend) {

		if(($dividend%3 != 0) ||($dividend%5 != 0)) {

			return $dividend." is not a multiple ";

		}
		else if (($dividend%3 == 0) ||($dividend%5 == 0)) {

			return $dividend." is a multiple";
		}
	}




	function getinput1reference() {

				if($input2 == 'A') {

			return 65;

		}
		elseif($input2 == '*' ) {
			
			return 42;

		}
		elseif($input2 == 'k' ) {
			
			return 107;

		}
	}



	function input1($input) {

				if($input == 'A') {

			return 65;

		}
		elseif($input == '*' ) {
			
			return 42;

		}
		elseif($input == 'k' ) {
			
			return 107;

		}
	}



	function input2($input) {

		if($input == 'A') {

			return 65;

		}
		elseif($input == '*' ) {
			
			return 42;

		}
		elseif($input == 'k' ) {
			
			return 107;

		}
	}





	function XorDecryption($input1, $input2) {
				
             	$input1 = $this->input1($input1);
             	$input2 = $this->input2($input2);

				$result = $input1 + $input2;

				//$result = int($result)
				if($result == 65) {

					return 'A';

				}
				elseif($result == 42) {

					return '*';

				}
				elseif($result == 107) {

					return 'k';

				}


	}

}

$test = new GsocAssignment1;
echo "GsocAssignment1<br><br>";
echo "No.1<br>";
echo $test->FizzBuzz("\"Fizz\"")."<br>";
echo "No.2<br>";
echo $test->multiples(45)."<br><br>";
echo "No.3<br>";
echo $test->XorDecryption('A','*')."<br>";