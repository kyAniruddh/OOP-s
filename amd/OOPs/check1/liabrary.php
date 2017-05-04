<?php
class emp
{
	var $msg;
	var $ani;
var $s=1;
function __construct()//connection start 
{
 $this->ani=mysqli_connect("localhost","root","","mydb") or die("connection not stablish");
}//end connection

function add($n,$e,$p)
{
	mysqli_query($this->ani,"insert into chech1 values('','$n','$e','$p')");
	$this->msg="inserted";

}
//fetching data

function fetch()
{
	
	$sel=mysqli_query($this->ani,"select * from chech1");
	if(mysqli_num_rows($sel)>0)
	{
	while($arr=mysqli_fetch_array($sel))
	{
		$this->s;
		?>
	
		<tr>
		<td><?php echo $this->s; ?></td>
		<td><?php echo $arr['name']; ?></td>
		<td><?php echo $arr['email']; ?></td>
		<td><?php echo $arr['phone']; ?></td>
		<td>
		<a href="?del=<?=$arr['id']; ?>">delete</a>
		<a href="update.php?up=<?=$arr['id']; ?>">update</a>
		</td>
		
		</tr>
			<?php
			
		$this->s++;
	}
	
}
else
{
	?>
	<tr><td colspan="5"><center>No Employee record</center></td></tr>
	
	<?php
	
}
}

//end fetching data
function delet($de)
{
	MYSQLI_QUERY($this->ani,"delete from chech1 where id=$de");
	header("location:employee.php");
}


  function update($n,$e,$p,$i)
  {
   mysqli_query($this->ani,"update chech1 set name='$n', email='$e', phone='$p' where id='$i'");
	header("location:employee.php");	
   }
   
   function sele($b)
{
	$vsel=mysqli_query($this->ani,"select * from chech1 where id=$b");
	$arr=mysqli_fetch_assoc($vsel);
	return($arr);
	
	
}
function __destruct()//for close connection
{
	mysqli_close($this->ani);
}//end connection
}
?>