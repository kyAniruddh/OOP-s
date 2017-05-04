<?php
$link=mysqli_connect("localhost","root","","mydb") or die("connection not stablish");
extract($_POST);
if(isset($sub))
{
	$sel=mysqli_query($link,"select * from loginpage1");
	$arr=mysqli_fetch_array($sel);
	$pass=md5($pass);
	if($pass==$arr['password'] && $id==$arr['id'])
	{
		
		header("location:home.php");
	}
	else
	{
		echo"id or password not correct";
		
	}
}
?>
<form method="post">
<h1>Login Here</h1>
Id: <input type="text" name="id" required/><br/><br/>
Password: <input type="text" name="pass" required/><br/><br/> &nbsp; &nbsp;
<input type="submit" name="sub" value="submit" />

</form>