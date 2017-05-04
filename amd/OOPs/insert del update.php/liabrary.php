<?php

class employ
{
	var $msg;
	var $adi;
	//use for database connection
	function __construct()
	{
		$this->adi=mysqli_connect("localhost","root","","oops") or die("connection not stablish");

		}
	//for insert
function inser($n,$e,$p)
{
	if(mysqli_query($this->adi,"insert into employee values('','$n','$e','$p')"))
	{
		$this->msg="inserted";
		}
		else
		{
			$this->msg="recored not inserted";
			}
	}	
	//end insert
	//gor fetching data
	function show()
	{
		if($sel=mysqli_query($this->adi,"select * from employee"))
		{
			if(mysqli_num_rows($sel)>0)
			{
				while($arr=mysqli_fetch_array($sel))
				{
					$s=1;
					?>
                   
                    <tr>
                    <td> <center><?php echo $s; ?> </center></td>
                      <td> <center><?php echo $arr['name']; ?></center></td>
                      <td> <center><?php echo $arr['email']; ?> </center></td>
                      <td> <center><?php echo $arr['phone']; ?> </center></td>
                       <td> <center> <a href="?del=<?php echo $arr['id'];?>"> Delete</a> </center></td>
                      
                    </tr>
                    
                    <?php
					$s++;
					}
				
				}
				else
				{
					?>
                    <tr><td colspan="4"><center>No Details</center></td></tr>
                    <?php
					}
			
			}
			else
			{
				$this->msg="not selected data";
				}
		
		}
	//end fetching
	// for deleting
	function del($d)
	{
		if(mysqli_query($this->adi,"delete from employee where id=$d"))
		{
			
			header("location:employee.php");
			}
		}
	
	//end deleteing
	function __destruct()
	{
		mysqli_close($this->adi);
		}
	}
	
?>