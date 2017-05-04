<?php
class FuOv
{
	function __call($a,$m)
	{
		if($a="abc")
		{
			if(count($a)==1)
			{
				echo "squire is" .($m[0]*$m[0]);
				}
				if(count($a)==2)
				{
					echo "Sume is" .($m[0]+$m[1]);
					?>
                    <br/>
					<?php 
					}
			}
		
		}
	
	
	}
	
$obj=new FuOv;
$obj->abc(10);
$obj->abc(10,20);
?>