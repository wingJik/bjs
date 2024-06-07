<?php
session_start();
include 'sql.php';
$name=$_POST["email"];
$password=$_POST["password"];
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $ch1 = "SELECT id,email,password FROM admin WHERE email='$name'";

  $result = $conn->query($ch1);
$row1 = $result->fetch_assoc();
if(!empty($row1["email"]) )
{
  if($row1["email"]==$name and $row1["password"]==$password)
  {
    $_SESSION["email"]=$row1["email"];

    echo "歡迎".$_SESSION["email"]."來臨 _馬上自動飛往首頁";
    header("Refresh:3;url=../index.php");}
  else
  {echo "密碼錯誤";}
}
  else
  {
    echo "帳號密碼錯誤";
  }
// echo  $name."<br>".$password;


// $_SESSION["favcolor"] = "green";
// $_SESSION["favanimal"] = "cat";

// echo  $_SESSION["favanimal"] ;
?>

