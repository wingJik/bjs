<?php
include 'sql.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
$name=$_POST["email"];
$password=$_POST["password"];
$ch1 = "SELECT id,email,password FROM admin WHERE email='$name'";

$result = $conn->query($ch1);
$row1 = $result->fetch_assoc();
if(!empty($row1["email"]))
{
  $inp=$row1["email"];
echo $inp."<br>";
if($inp==$name){
  header("Refresh:3;url=index.html");
   echo "這組帳號有人辦過3秒後自動返回";

  };

}else{
    $sql = "INSERT INTO admin (email,password) VALUES ('$name', '$password' )";

 if ($conn->query($sql) === TRUE) {
     echo "信箱帳號".$name."<br>恭喜註冊成功5秒後自動返回";
   header('Refresh:5;url=index.html');
   $conn->close();
      exit();
   } else {
    echo "註冊沒成功" ;
    }

 }



  

// $sql = "SELECT id,email,password FROM admin WHERE email=$name";
// $result = $conn->query($sql);
// if ($result->num_rows > 0) {
 
//   while($row = $result->fetch_assoc()) {
//     echo "id: " . $row["id"]. " - Name: " . $row["email"]. " 密碼: " . $row["password"]. "<br>";
//   }
// } else {
//   echo "0 results";
// }

// if()



//  $sql = "INSERT INTO admin (email,password)
//  VALUES ('$name', '$password' )";

// if ($conn->query($sql) === TRUE) {
//     echo "恭喜註冊成功";
//     header('location:index.html');
//     exit();
//   } else {
//     echo "註冊沒成功" ;
//   }





$conn->close();
?>