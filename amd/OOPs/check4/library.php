<?php
class check4
{
	var $link;
	var $msg;
	function __construct()
	{
		$this->link=mysqli_connect("localhost","root","","mydb");
		
	}
	function add($name,$add,$city)
	{
		mysqli_query($this->link,"insert into check4 value('','$name','$add','$city')");
		$this->msg="inserted";
	}
	function fetch()
	{
		$sel=mysqli_query($this->link,"select * from check4");
		mysqli_num_rows($sel);
		while($arr=mysqli_fetch_array($sel))
		{
			?>
			<tr>
			<td><?php echo $arr['id']; ?></td>
			<td><?php echo $arr['name']; ?></td>
			<td><?php echo $arr['address']; ?></td>
			<td><?php echo $arr['city']; ?></td>
			<td>
			<a href="?del=<?=$arr['id']?>">Delete</a>
			<a href="update.php?up=<?=$arr['id']?>">Edit</a>
			</td>
			</tr>
			<?php
		
	}
	}
	function dele($id)
	{
		mysqli_query($this->link,"delete from check4 where id=$id");
		
	}
	function sel($id)
	{
		$sel=mysqli_query($this->link,"select * from check4 where id=$id");
		$arr=mysqli_fetch_assoc($sel);
		return($arr);
		
	}
	function updat($n,$add,$c)
	{
		if(mysqli_query($this->link,"update check4 set name='$n',address=$add',city='$c'"))
		{
			header("location:employee.php");
			
		}
		else
		{
			$this->msg="not updated";
		}
		
		
	}
	
	function __destruct()
	{
		mysqli_close($this->link);
		
	}
	

	}
?>
	