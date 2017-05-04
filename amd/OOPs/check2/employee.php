<?php
include("liabrary1.php");
extract($_POST);
$obj=new ch2;
if(isset($_GET['del']))
{
	$obj->delet($_GET['del']);
	
}
if(isset($sub))
{
	$obj->add($id,$name,$address);
	
}


?>


<form method="post">
<table border="5">
<tr>
<td colspan="4">Employee Details <a href="add.php">Add Employee</a></td>

</tr>
<tr>
<td>Id</td>
<td>Name</td>
<td>Address</td>
<td>Action</td>
</tr>
<?php
$obj->fetch();
?>
</table>

</form>