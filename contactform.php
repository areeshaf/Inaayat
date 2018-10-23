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



$Customer_email = $_POST["email"]; 
$password = $_POST["password"];
$name = $_POST["name"];
$address = $_POST["address"];
$city= $_POST["city"];
$state=$_POST["state"];
$zip=$_POST["zip"];



$sql="INSERT INTO contact(Email,Password,name,Address,City,State,Zip)VALUES('$Customer_email','$password','$name','$address','$city','$state','$zip')";



if(!mysqli_query($conn,$sql))
{

	echo "not inserted";

}
else
{

	echo"THANKYOU FOR BEING OUR MEMBER";
}
header("refresh:3;url=sign.php");



?>
</html>