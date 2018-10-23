<?php
include('connect.inc');
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);
//$edesignation = $_POST['edesignation'];



echo('<form action="try.php" method="POST">');

$sql_faculty3 = "SELECT distinct categoryy FROM fooditems"; 
$result3 = mysql_query($sql_faculty3);

if(!$result3) 	                { 		die('<p> Error Perofrmingiii query .... </p>'); 	} 

if(mysql_num_rows($result3)==0) 	{ 		die('<p>Info does not exist</p>');           	}


	echo('<select name="select_categoryy" onchange="this.form.submit()">');


	echo("<option SELECTED VALUE = \"Select categoryy\">Selecttt Category </option>");
	while($row = mysql_fetch_object($result3))
	{
		echo("<option value=\"$row->categoryy\">$row->categoryy</option>");
	}

	echo('</select>');

echo('</form>');

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

echo('<form action="try.php" method="POST">');


$sql_faculty2 = "SELECT distinct categoryy FROM fooditems"; 
$result2= mysql_query($sql_faculty2);

if(!$result2) 	                { 		die('<p> Error Perofrmingiii query .... </p>'); 	} 

if(mysql_num_rows($result2)==0) 	{ 		die('<p>Info does not exist</p>');           	}


	echo('<select name="select_categoryy" onchange="this.form.submit()">');


	echo("<option SELECTED VALUE = \"Select categoryy\">Selecttt Category </option>");
	while($row = mysql_fetch_object($result2))
	{
		echo("<option value=\"$row->categoryy\">$row->categoryy</option>");
	}

	echo('</select>');

echo('</form>');


//Second Query started





$select_faculty4=$_POST['select_categoryy'];

echo('<form action="food_display.php" method="POST">');
$sql_department4 = "SELECT distinct Foodname FROM fooditems where categoryy = '$select_faculty4'"; 
$result4 = mysql_query($sql_department4);

if(!$result4)                       { 		die('<p> Error Perofrminghhh query .... </p>'); 	} 

if(mysql_num_rows($result4)==0) 	{ 		die('<p>Info does not exist</p>'); 	            }



echo('<select name="Foodname">');
echo("<option SELECTED> Select your choice    </option>");

	while($row=mysql_fetch_object($result4))
	{
		echo("<option value=\"$row->Foodname\">$row->Foodname</option>");
	}
	
echo('</select>');

echo('<input type="hidden" value=0 name="init" />');
	echo('<input type="submit" value="Go..." />');
echo('</form>');



?>