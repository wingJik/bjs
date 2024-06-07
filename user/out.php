<?php
session_start();
session_unset();


header("Refresh:3;url=../index.php");
echo"恭喜登出3秒後回首頁";
?>