<?php
include("liabrary.php");
$obj=new emp;
extract($_POST);
if(isset($sub))
{
	$obj->add($name,$address);
}

?>

<form method="post">
<h1>Add Employee Here</h1>
<h1><?php echo $obj->msg;?></h1>
Name<input type="text" name="name" required/>
Address<input type="text" name="address" required/>
<input type="submit" name="sub" value="submit"/>
<a href="employee.php">Show Emp</a>

</form>