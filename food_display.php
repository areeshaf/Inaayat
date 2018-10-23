<?php
ini_set('error_reporting',E_ALL & ~E_DEPRECATED & ~E_NOTICE);

include('connect.inc');

$Foodname = $_POST['Foodname'];
$init = $_POST['init'];
$length = 20;


$sql = "SELECT * FROM fooditems where Foodname='$Foodname' LIMIT $init, $length"; 
$result2 = mysql_query($sql);

if(!$result2) 
	{ 
		die('<p> Error Perofrming 2query .... </p>'); 
	} 

if(mysql_num_rows($result2)==0) 
	{ 
		die('<p>Info does not existtttt</p>'); 
	}


	echo('<table align="center" bgcolor=\"#FFFFFF\" width=\"100%\" cellspacing=\"1\" cellpadding=\"0\">');
	echo('<tr bgcolor="#33CCFF"><td width="30"><font color=\"#FFFFFF\"><b>Serial NO.</font></b></td><td><font color=\"#FFFFFF\"><b>Foodname</font></b></td><td width="180"><font color=\"#FFFFFF\"><b>FAmount</font></b></td><td width="180"><font color=\"#FFFFFF\"><b>Faculty</font></b></td><td width="180"><font color=\"#FFFFFF\"><b>categoryy</font></b></td></tr>');
	$i = $init + 1;
	while ( $row = mysql_fetch_array($result2) ) {
		$mod = $i % 2;
		if($mod==0) {
			$bg = "#EEFFFF";
		} else {
			$bg = "#FFFFEE";
		}
		echo('<tr bgcolor="'.$bg.'"><td>'.$i.'.</td><td>'.$row['Foodname'].'</td><td>'.$row['FAmount'].'</td><td>'.$row['faculty'].'</td>
		<td>'.$row['categoryy'].'</td>
		</tr>');
		$i++;
	}
	echo('</table>');
	echo('<center><p>');

	
	
	$size = mysql_query("SELECT * FROM fooditems where Foodname='$Foodname' ");
		if ($init!=0) {
		if ($init>=$length){
			$begin = $init - $length;
		} else {
			$begin = 0;
		}
		echo ('&lt;&lt; <a href="food_display.php?Foodname='.$Foodname.'&init=0">first</a>&nbsp;&nbsp;');
		echo ('&lt; <a href="faculty_display.php?department='.$department.'&init='.$begin.'">prev</a>&nbsp;&nbsp;');


	} else {
		echo ('&lt;&lt; first&nbsp;&nbsp;');
		echo ('&lt; prev&nbsp;&nbsp;');
	}
	$begin = $init + $length;
	if (mysql_num_rows($size)>$begin) {
		$last = mysql_num_rows($size) - $length;
		echo ('&nbsp;&nbsp;<a href="faculty_display.php?department='.$department.'&init='.$begin.'">next</a> &gt;');
		echo ('&nbsp;&nbsp;<a href="faculty_display.php?department='.$department.'&init='.$last.'">last</a> &gt;&gt;');
	} else {
		echo ('&nbsp;&nbsp;next &gt;');
		echo ('&nbsp;&nbsp;last &gt;&gt;');
	}
	echo('</center></p>');
?>
