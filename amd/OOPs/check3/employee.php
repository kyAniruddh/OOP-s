<?php
include("liabrary.php");
$obj=new emp;
if(isset($_GET['del']))
{
	$obj->dele($_GET['del']);
	
	
}

?>

<form method="post">
<table border="2">
<tr>
<td colspan="4"> Employee Details <a href="add.php">Add Emp</a></td>
</tr>
<tr>
<td>sr_no.</td>
<td>Name</td>
<td>Address</td>
<td>Action</td>
</tr>
<?php
$obj->fetch();

?>

</table>

</form>