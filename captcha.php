<?php 
	class Captcha
	{	
		private $pattern;
		public function setPattern($pattern)
		{
			$this->pattern = $pattern;	
		}
		public function setRightOperand($number)
		{
			$this->right_operand = $number;
		}
		public function getRightOperand()
		{
			if($this->pattern == 1)
			{
				switch ($this->right_operand) {
		
					case '1':$this->right_operand = "one"; break;
					case '2':$this->right_operand = "two"; break;
					case '3':$this->right_operand = "three"; break;
					case '4':$this->right_operand = "four"; break;
					case '5':$this->right_operand = "five"; break;
					case '6':$this->right_operand = "six"; break;
					case '7':$this->right_operand = "seven"; break;
					case '8':$this->right_operand = "eight"; break;
					case '9':$this->right_operand = "nine"; break;
					case '10':$this->right_operand = "ten"; break;
					
					default:$this->right_operand = $number; break;
				}
			}

			if($this->pattern == 2)
			{
				$this ->right_operand = $this ->right_operand;
			}	

			return $this->right_operand;
		}

		public function setLeftOperand($number)
		{
			$this->left_operand = $number;
		}
		public function getLeftOperand()
		{
			if($this->pattern == 2)
			{
				switch ($this->left_operand) {
		
					case '1':$this->left_operand = "one"; break;
					case '2':$this->left_operand = "two"; break;
					case '3':$this->left_operand = "three"; break;
					case '4':$this->left_operand = "four"; break;
					case '5':$this->left_operand = "five"; break;
					case '6':$this->left_operand = "six"; break;
					case '7':$this->left_operand = "seven"; break;
					case '8':$this->left_operand = "eight"; break;
					case '9':$this->left_operand = "nine"; break;
					case '10':$this->left_operand = "ten"; break;
					
					default:$this->left_operand = $number; break;
				}
			}

			if($this->pattern == 1)
			{
				$this ->left_operand = $this ->left_operand;
			}	

			return $this->left_operand;
		}
		/*public function setOperand($operand)
		{
			$this->operand = $operand;
		}*/
		public function getOperand($operand)
		{
			$operator= [1 =>'+',2 =>'-',];
			return $operator[$operand];
		}
	}
?>