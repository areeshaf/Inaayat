<?php

$host="localhost";
$dbuser="root";
$pass="";
$dbname="prj";

$conn=mysqli_connect($host,$dbuser,$pass,$dbname);
$sql="select * from checkb ";
$records=mysqli_query($conn,$sql);


  if(mysqli_connect_errno())
{

	die("not connected to server" . mysqli_connect_error());
}
?>
<html>
<head>
<title>BILL GENERATION</title>
</head>
<body>
	<table width="800" border="1" cellpadding="1" cellspacing="1">
		<tr>
			<th>FOODNAME</th>
		</tr>
		<?php 
		while ($checkb=mysqli_fetch_assoc($records)) {
			echo "<tr>";
			echo "<td>".$checkb['Foodname']."</td>";
			echo "</tr>";
		}
		 ?>
	</table>
	<form action="vp.php" method="get">
		<button type="submit">Proceed to Pay</button>
	</form>
</body>
</html>