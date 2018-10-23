<html>	
<?php

$host="localhost";
$dbuser="root";
$pass="";
$dbname="prj";

$conn=mysqli_connect($host,$dbuser,$pass,$dbname);

mysqli_query($conn,"DELETE FROM checkb");

  if(mysqli_connect_errno())
{

	die("not connected to server" . mysqli_connect_error());
}

	$checkbox1=$_POST['order'];
	$chk="";
	foreach ($checkbox1 as $chk1) {
		$chk.=$chk1.",";
}
 	

$in_ch=mysqli_query($conn, "insert into checkb(Foodname) values('$chk')");
if($in_ch==1)
{
	echo '<script> alert("Bill Generated")</script>';
}
else
{
	echo '<script> alert("failed")</script>';
}

?>
<head></head>
<body>
	<form action="displaybill.php" method="get">
		<button type="submit">GENERATE BILL</button>
	</form>
</body>
</html>