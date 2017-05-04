<?php
class X
{
	function fun1()
	{
		$a=10;
		$b=20;
		$c=$a+$b;
		echo"c=$c <br/>";
		return($c);
		
		}
		
	}
	
class Y extends X
{
	function fun2()
	{
		$m=100;
		$sum=$m+parent::fun1();
		echo"sum=$sum";
		
		}
	
	}	
	$obj1=new Y;
	$obj1->fun2();
?>