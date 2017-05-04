<?php
include("library.php");
$obj=new check4;
if(isset($_GET['up']))
{
	$x=$obj->sel($_GET['up']);
	

extract($_POST);
if(isset($sub))
{
	
$obj->updat($name,$address,$city);	
}

?>

<form method="post">
<h1>update Employee  Recored Here</h1>
<p><?=$obj->msg;?></p>
Name:<input type="text" name="name" value="<?=$x['name']?>"/><br/><br/>
Address:<input type="text" name="address" value="<?=$x['address']?>" /> <br/><br/>
City:<input type="text" name="city"  value="<?=$x['city']?> "/><br/><br/>
<input type="submit" name="sub" value="submit" />

</form>
<?php
}
?>