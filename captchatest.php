<?php 
	class CaptchaTest extends PHPUnit_Framework_TestCase
	{
		public function testSetRightOperandPattern1With5ReturnFive()
		{
			$captcha = new Captcha();
			$captcha->setPattern(1);
			$captcha->setRightOperand(5);
			$this->assertEquals("five",$captcha->getRightOperand());
		}
		public function testSetLeftOperandPattern1With3Return3()
		{
			$captcha = new Captcha();
			$captcha ->setPattern(1);
			$captcha -> setLeftOperand(3);
			$this -> assertEquals("3",$captcha -> getLeftOperand());
		}
		public function testSetRightOperandPattern2With4Return4()
		{
			$captcha = new Captcha();
			$captcha -> setPattern(2);
			$captcha -> setRightOperand(4);
			$this -> assertEquals("4",$captcha -> getRightOperand());

		}
		public function testSetLeftOperandPattern2With7ReturnSeven()
		{
			$captcha = new Captcha();
			$captcha ->setPattern(2);
			$captcha -> setLeftOperand(7);
			$this -> assertEquals("seven",$captcha -> getLeftOperand());
		}
		public function testGetOperand1ReturnPlusOperator()
		{
			$captcha = new Captcha();
			$this -> assertEquals("+",$captcha -> getOperand(1));
		}
		public function testGetOperand2ReturnMinusOperator()
		{
			$captcha = new Captcha();
			$this -> assertEquals("-",$captcha -> getOperand(2));
		}
	}
?>