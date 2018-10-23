<?php
include('connect.inc');
//$edesignation = $_POST['edesignation'];



echo('<form action="foooood.php" method="POST">');

$sql_food = "SELECT distinct categoryy FROM fooditems "; 
$result = mysql_query($sql_food);

if(!$result) 	                { 		die('<p> Error Perofrming query .... </p>'); 	} 

if(mysql_num_rows($result)==0) 	{ 		die('<p>Info does not exist</p>');           	}


	echo('<select categoryy="select_categoryy" onchange="this.form.submit()">');


	echo("<option SELECTED VALUE = \"Select categoryy\">Selecttt Faculty </option>");
	while($row = mysql_fetch_object($result))
	{
		echo("<option value=\"$row->categoryy\">$row->categoryy</option>");
	}

	echo('</select>');

echo('</form>');	


//if (isset($_POST['select_categoryy'])) {
   // $select_categoryy = $_POST['select_categoryy'];
//}




//Second Query started

$select_categoryy=$_POST['select_categoryy'];


echo('<form action="food_display.php" method="GET">');
$sql_department = "SELECT distinct Foodname FROM fooditems where categoryy = '$select_categoryy'"; 
$result1 = mysql_query($sql_department);

if(!$result1)                       { 		die('<p> Error Perofrming query .... </p>'); 	} 

if(mysql_num_rows($result1)==0) 	{ 		die('<p>Info does not exist</p>'); 	            }



echo('<select name="Foodname">');
echo("<option SELECTED> Select your choice    </option>");

	while($row=mysql_fetch_object($result1))
	{
		echo("<option value=\"$row->Foodname\">$row->Foodname</option>");
	}
	
echo('</select>');

echo('<input type="hidden" value=0 name="init" />');
	echo('<input type="submit" value="Go..." />');
echo('</form>');



?>