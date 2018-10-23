<html>	
<head>
<style>

table{
	  2px solid red;
	  background-color:#FFC;
}

th{
    border-bottom: 5px solid #000;
}
td{
    border-bottom: 5px solid #666;
}
</style>
</head>
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



$snacks = $_POST["snacks"]; 
$mughlai = $_POST["mughlai"];
$italian = $_POST["italian"];
$dessert = $_POST["dessert"];
$beverages= $_POST["beverages"];




$sql="INSERT INTO food(snacks,mughlai,italian,dessert,beverages)VALUES('$snacks','$mughlai','$italian','$dessert','$beverages')";



if(!mysqli_query($conn,$sql))
{

	echo "not inserted";

}
else
{

echo "THANKYOU FOR ORDERING IN INAAYAT                     ";
echo"YOUR ORDER IS :";
	echo "<table border='1'>

<tr>

<th>Snacks</th>

<th>Mughlai</th>

<th>Italian</th>

<th>Dessert</th>

<th>Beverages</th>

</tr>";

  echo "<tr>";

  echo "<td>" . $snacks. "</td>";

  echo "<td>" . $mughlai . "</td>";

  echo "<td>" . $italian . "</td>";

  echo "<td>" . $dessert . "</td>";

  echo "<td>" . $beverages . "</td>";

  echo "</tr>";

echo "</table>";
}

header("refresh:5;url=booking.html");



?>
</body>
</html>