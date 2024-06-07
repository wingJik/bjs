<?php
session_start();
include 'sql.php';






$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";

echo  $_SESSION["favanimal"] ;
?>

