<?php
include("library.php");
$obj=new check4;

$obj->dele($_GET['del']);

?>

<table border="2">
<tr>
<td colspan="5"><center><h1>Employee Record Here</h1><a href="add.php">Add Emp</a></center></td>

</tr>
<tr>
<td>id</td>
<td>Name</td>
<td>Address</td>
<td>city</td>
<td>Action</td>
</tr>
<?php
$obj->fetch();
?>

</table>