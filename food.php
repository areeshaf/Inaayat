<?php
include('connect.inc');

echo('<form action="food.php" method="POST">');

$sql = "SELECT distinct categoryy FROM fooditems "; 
$result = mysql_query($sql);

if(!$result) 	                { 		die('<p> Error Perofrming query .... </p>'); 	} 

if(mysql_num_rows($result)==0) 	{ 		die('<p>Info does not exist</p>');           	}


	echo('<Select categoryy="select_categoryy" onchange="this.form.submit()">');


	echo("<option SELECTED VALUE = \"Select categoryy\">Selecttt category</option>");
	while($row = mysql_fetch_object($result))
	{
		echo("<option value=\"$row->categoryy\">$row->categoryy</option>");
	}

	echo('</select>');

//echo('<input type="hidden" name="select_faculty" />');
//echo('<input type="submit" value="Go..." />');
echo('</form>');	

$select_category= $_POST['select_categoryy'];
echo('<form action="food_display.php" method="GET">');
$sql_foodname = "SELECT distinct Foodname FROM fooditems where categoryy ='$select_category'"; 
$result1=mysql_query($sql_foodname);

if(!$result1)                       { 		die('<p> Error Perofrming query .... </p>'); 	} 

if(mysql_num_rows($result1)==0) 	{ 		die('<p>Info does not exist yrrrrr</p>'); 	            }

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