<?php
include("liabrary.php");
extract($_POST);
$obj=new emp;
if(isset($sub))
{
	$obj->add($name,$email,$phone);
	

}


?>

<form method="post">
<h1>Add Employee Here</h1>
 <p><?php echo $obj->msg; ?></p>
 Name:<input type="text" name="name" required/><br/><br/>
 Email:<input type="email" name="email" required/><br/><br/>
 Phone:<input type="text" name="phone" required/><br/><br/>
 &nbsp; &nbsp; &nbsp; &nbsp;

 <input type="submit" name="sub" value="submit" class="btn btn-primary" />
 <a href="employee.php"> Show </a>




</form>