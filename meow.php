
<?php



$host="localhost";
$dbuser="root";
$pass="";
$dbname="prj";


    header("Content-type: text/css; charset: UTF-8");

$brandColor = "#990000";
   $linkColor = "#555555";

$conn=mysqli_connect($host,$dbuser,$pass,$dbname);



  if(mysqli_connect_errno())
{

	die("not connected to server" . mysqli_connect_error());
}



// $Customer_email = $_POST["email"]; 
// $password = $_POST["password"];
// $address1 = $_POST["address1"];
// $address2 = $_POST["address2"];
// $city= $_POST["city"];
// $state=$_POST["state"];
// $zip=$_POST["zip"];




// $sql="INSERT INTO contact(Email,Password,Address1,Address2,City,State,Zip)VALUES('$Customer_email','$password','$address1','$address2','$city','$state','$zip')";



// if(!mysqli_query($conn,$sql))
{

	echo "<h1>not inserted</h1>";

}
// else
{

	echo"<h1>THANKYOU FOR BEING OUR MEMBER</h1>";
}
// header("refresh:3;url=sign.html");

function saveG()
{
	return "green";
}

?>
<html>
<head>
</head>
<body>
<form method="post">
	<input type="submit" name="sub" value="HURRRRRRRRRRRR"
	style="background-color: <?php echo saveG(); ?>; "/>
</body>
</html>