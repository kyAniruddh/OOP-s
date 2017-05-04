<?php
class AB
{
	function AB()
	{
		echo"It is constructor(1) <br/>";
		}
		function __destruct()
		{
			
			echo"destroy the memory1 <br/>";
			}
	}
$obj1=new AB();
?>
<?php
class ABC
  {
	  function __construct()
	  
	  {
		  echo"It is prefefine constructor(2) <br/>";
		  }
		  function __destruct()
		  {
			  echo"destroy the memory2  <br/>";
			  }
	  }
	  $obj2=new ABC();
?>