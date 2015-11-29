<?php 
	
	class FizzBuzz
	{
		public static function recieve($num){
			$check = "";

			if($num%3==0){
				$check .="Fizz";
			}
			if($num%3==0){
				$check .="Buzz";
			}
			if($num%3==0){
				$check = $num;
			}
			return $check;
		}
	}
	
 ?>