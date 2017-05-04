<?php
error_reporting(0);
include("liabrary.php");

$obj=new emp;
if(isset($_GET['up']))
{
 $x=$obj->sele($_GET['up']);
 //print_r($x);
extract($_POST);
if(isset($sub))
{
    
	$obj->update($name,$email,$phone,$_GET['up']);
	echo"record updated";

}
?> 
<form method="post">


<p>Update record Here</p>
Id:<input type="text" name="id" value="<?php echo $x['id']; ?>" readonly/><br/><br/>
Name:<input type="text" name="name" value="<?php echo$x['name']; ?>" /><br/><br/>
Email:<input type="email" name="email" value="<?php echo $x['email']; ?>" /><br/><br/>
Phone:<input type="text" name="phone" value="<?php echo $x['phone'];  ?>" /><br/>
&nbsp; &nbsp;&nbsp; &nbsp;
<input type="submit" name="sub" value="submit" />


</form>
<?php
}
?>