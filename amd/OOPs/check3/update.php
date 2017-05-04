<?php
error_reporting(0);
include("liabrary.php");
$obj=new emp;
if(isset($_GET['up']))
{
	$m=$obj->sele($_GET['up']);
}	
 extract($_POST);
if(isset($_GET['up']))
  {
	  
	if(isset($sub))
	{
	$obj->updet($name,$address);
	
	}



?>

<form method="post">
<h1>Update Here</h1>
 Id<input type="text" name="id"  value="<?php echo $m['id']; ?>"readonly />
 Name<input type="text" name="name"  value="<?php echo $m['name']; ?>"/>
 Address<input type="text" name="address"  value="<?php echo $m['address']; ?>"/>
<input type="submit" name="sub"  value="submit"/>

</form>
  <?php
  
}
?>