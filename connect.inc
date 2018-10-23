<?php
	$db = mysql_connect ('localhost', 'root', '');
	//$db = mysql_connect('Server', 'ID', 'Password');
	if (!$db) {
		die( '<p>Problem in connecting to the database server.</p>' );
	}
	if (!@mysql_select_db('prj')) {
		die( '<p>Problem in locating the database.</p>' );
	}
?>