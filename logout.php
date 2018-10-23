<?php
session_start();
unset($_SESSION["username"]) ;
header("refresh:1;url=changedfront.php");


?>