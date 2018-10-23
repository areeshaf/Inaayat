<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
include('connect.inc');

//$edesignation = $_POST['edesignation'];



echo('<form action="ff.php" method="POST">');

$sql_faculty = "SELECT distinct categoryy FROM fooditems"; 
$result = mysql_query($sql_faculty);

if(!$result) 	                { 		die('<p> Error Perofrmingiii query .... </p>'); 	} 

if(mysql_num_rows($result)==0) 	{ 		die('<p>Info does not exist</p>');           	}


	echo('<select name="select_categoryy" onchange="this.form.submit()">');


	echo("<option SELECTED VALUE = \"Select categoryy\">Selecttt Category </option> ");
	while($row = mysql_fetch_object($result))
	{
		echo("<option value=\"$row->categoryy\">$row->categoryy</option>");
	}

	echo('</select>');

echo('</form>');	



//Second Query started

$select_faculty=$_POST['select_categoryy'];

echo('<form action="food_display.php" method="POST">');
$sql_department = "SELECT distinct Foodname FROM fooditems where categoryy = '$select_faculty'"; 
$result1 = mysql_query($sql_department);

if(!$result1)                       { 		die('<p> Error Perofrminghhh query .... </p>'); 	} 

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