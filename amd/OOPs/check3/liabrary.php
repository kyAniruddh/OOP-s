<?php
class emp
{
	var $con;
	var $s=1;
	var $msg;
	function __construct()
	{
		$this->con=mysqli_connect("localhost","root","","mydb") or die ("connection not stablish");
		
	}
	function add($n,$add)
	{
		if(mysqli_query($this->con,"insert into check3 values('','$n','$add');"))
		{
		$this->msg="Data Inserted";
		}
	}
	function fetch()
	{
		$sel=mysqli_query($this->con,"select * from check3");
		if(mysqli_num_rows($sel)>0)
		{
			while($arr=mysqli_fetch_array($sel))
			{
				$this->s;
				?>
				<tr>
				<td><?php echo $this->s; ?></td>
				<td><?php echo $arr['name']; ?></td>
				<td><?php echo $arr['address']; ?></td>
				<td><a href="?del=<?=$arr['id']; ?>">Delete</a> <a href="update.php?up=<?=$arr['id']; ?>">Update</a></td>
				</tr>
				
				<?php
				$this->s++;
			}
			
		}
		else
		{
			?>
			<tr>
			<td colspan="4"> <center> No Emp</center></td>
			</tr>
			<?php
			
		}
		
	}
	
	function dele($d)
	{
		mysqli_query($this->con,"delete from check3 where id=$d");
		
	}
	function sele()
	{
		$sel=mysqli_query($this->con,"select * from check3");
		$arr=mysqli_fetch_assoc($sel);
		return($arr);
		
	}
	function updet($n,$add)
	{
		mysqli_query($this->con,"update check3 set name='$n',address='$add';");
		header("location:employee.php");
		
	}
	
	function __destruct()
	{
		mysqli_close($this->con);
		
	}
}
?>