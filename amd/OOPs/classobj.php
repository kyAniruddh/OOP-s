<?php
class A
{
	var $a=100;
	var $b=50;
	function xyz()
	{
		$sum=$this->a+$this->b;
		echo $sum;
		}
	}
	$ob1=new A;
	$ob1->xyz();
?>