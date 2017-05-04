<?php
include("liabrary.php");
$obj=new emp;

if(isset($_GET['del']))
{
	$obj->delet($_GET['del']);
	
}

?>

<table height=300" width="400" border="10'>
<tr border="">
<td colspan="5"> <center><h1>Employee Detail</h1> <a href="add.php">Add employee</a></center> </td>
</tr>
<?php
$obj->fetch();
?>
</table>