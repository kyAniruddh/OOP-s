<?php
class ch2
{
var	$ani1;
var $msg;
	function __construct()
	{
		$this->ani1=mysqli_connect("localhost","root","","mydb") or die("connection not stablish");
		
	}
	function sele($i)
	{
		$sel=mysqli_query($this->ani1,"select * from check2 where id='$i'");
		
		$arr=mysqli_fetch_assoc($sel);
		return($arr);
		
	}
	
	  function add($na,$add)
	  {
		  if(mysqli_query($this->ani1,"insert into check2 values('','$na','$add');"))
		  {
			  $this->msg="data inserted";
			  
		  }
		  else
		  {
			 $this->msg="data not inserted";
			  
		  }
	  }
	  function fetch()
	  {
		  $sel=mysqli_query($this->ani1,"select * from check2");
		  if(mysqli_num_rows($sel)>0)
		  {
		  while($arr=mysqli_fetch_array($sel))
		  {
			  ?>
			  <tr>
			  <td><?php echo $arr['id'];?></td>
			   <td><?php echo $arr['name'];?></td>
			    <td><?php echo $arr['address'];?></td>
				<td><a href="?del=<?=$arr['id']; ?>">Delete</a> <a href="update.php?up=<?=$arr['id']; ?>"> Update</a></td>
			  </tr>
			  <?php
			  
		  }
		  }
		  else
		  {
			 ?> 
			<tr>
			<td colspan="4"><center> NO Employee</center></td>
			</tr> 
<?php			
		  }
		  
		  
	  }
	  
	  function updated($na,$add,$id)
	  {
		 
		 if(mysqli_query($this->ani1,"update check2 set  name='$na',address='$add' where id=$id"))
		 {
		  header("location:employee.php");
		 }
	  }
	
	function delet($d)
	{
		mysqli_query($this->ani1,"delete from check2 where id=$d");
		
	}
	
	
	function __destruct()
	{
		mysqli_close($this->ani1);
		
	}
	
}
?>