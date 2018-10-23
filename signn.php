2<html>	
<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);

$host="localhost";
$dbuser="root";
$pass="";
$dbname="prj";
session_start();
$conn=mysqli_connect($host,$dbuser,$pass,$dbname);



  if(mysqli_connect_errno())
{

	die("not connected to server" . mysqli_connect_error());
}

$Customer_email =  $_POST["email"]; 
$password = $_POST["password"];

$check = "SELECT * FROM contact WHERE Email = \"$Customer_email\" AND Password = \"$password\""; // checking data
    $cresult = mysqli_query($conn,$check);
    if (mysqli_num_rows($cresult)>0)
      {
          if($row=mysqli_fetch_assoc($cresult))
          {
          echo "YOU are a member";

         
         session_start();
         $_SESSION["username"]=$row["Email"];
         header('refresh:3;url=menu.php');
        }
      }
      else
        {
        	echo "NOT A MEMBER.PLEASE SIGN UP";
        	header('refresh:3;url=contact.php');
        }

        


?>
</html>
