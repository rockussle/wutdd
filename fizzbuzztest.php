<?php 

	class FizzBuzzTest extends PHPUnit_Framework_TestCase
	{
		public function testEnter15ReturnF_B()
		{
			$expected = "FizzBuzz";
			$result = FizzBuzz::recieve(15);
			$this->assertEquals($expected,$result);
		}


	}
