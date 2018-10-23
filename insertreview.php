<html>
<body>
	
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



$Customer_Name =  $_POST["field1"]; 
$Email = $_POST["field2"];
$Phone_no = $_POST["field3"];
$Your_Message = $_POST["field4"];
$Any_suggestions = $_POST["field5"];



$sql="INSERT INTO reviews(Customer_Name,Email,Phone_no,Your_message,Any_suggestions)VALUES('$Customer_Name','$Email','$Phone_no','$Your_Message','$Any_suggestions')";



if(!mysqli_query($conn,$sql))
{

	echo "not inserted";

}
else
{

	echo"THANKYOU FOR YOUR FEEDBACK";
}
header("refresh:3;url=about.php");

?>
</body>
</html>
