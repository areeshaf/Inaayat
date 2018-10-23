<html>	
<?php

$host="localhost";
$dbuser="root";
$pass="";
$dbname="prj";
$tble="checkb";

$conn=mysqli_connect($host,$dbuser,$pass,$dbname);



  if(mysqli_connect_errno())
{

	die("not connected to server" . mysqli_connect_error());
}


	$checkbox1=$_POST['order'];
	$chk="";
	foreach ($checkbox1 as $chk1) {
		$chk.=$chk1.",";
}

$in_ch=mysqli_query($conn,"insert into checkb(Foodname) values('$chk')");


if($in_ch==1)
{
	echo '<script> alert("inserted")</script>';
}else
{
	echo '<script> alert("failed")</script>';
}


?>
</html>