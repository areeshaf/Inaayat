<html>	
<?php

$host="localhost";
$dbuser="root";
$pass="";
$dbname="prj";

$conn=mysqli_connect($host,$dbuser,$pass,$dbname);



  if(mysqli_connect_errno())
{

	die("not connected to server" . mysqli_connect_error());
}



$Customer_name =  $_POST["Name"];
$Customer_email= $_POST["email"]; 
$CMobile = $_POST["mobile"];
$city= $_POST["city"];
$CTable=$_POST["table"];
   $sql="INSERT INTO table_info(CName,CEmail,CMob,City,CTable_Inf)VALUES('$Customer_name','$Customer_email','$CMobile', '$city','$CTable')";



if(!mysqli_query($conn,$sql))
{

	echo "BOOKING NOT CONFIRMED";
	header("refresh:5;url=booking.html");
}
else
{

	echo"YOUR TABLE HAS BEEN BOOKED";
	header("refresh:5;url=reviews.html");
}


?>
</html>