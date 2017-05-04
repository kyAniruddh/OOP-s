<?php
include("liabrary1.php");
$obj1=new ch2;
if(isset($_GET['up']))
{
 $m=$obj1->sele($_GET['up']);

extract($_POST);

	if(isset($subb))
	{
		echo $name;
	$obj1->updated($name,$address,$_GET['up']);		
    }
	
?>

<form method="post">
 Id<input type="text" name="id" value="<?php echo $m['id']; ?>" readonly/><br/></br>
 Name<input type="text" name="name"  value="<?php echo $m['name']; ?>" /><br/></br>
Address <input type="text" name="address"  value="<?php echo $m['address']; ?>" /> <br/></br>
<input type="submit" name="subb" value="submit" />

</form>
<?php
}
?>