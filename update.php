<?php
require('connectdb.php');

$id = $_POST["id"];
$Firstname = $_POST["Firstname"];
$Lastname = $_POST["Lastname"];
$Birthday = $_POST["Birthday"];
$Gender = $_POST["Gender"];
$Age = $_POST["Age"];
$Career = $_POST["Career"];
$Village = $_POST["Village"];
$District = $_POST["District"];
$Province = $_POST["Province"];
$Phone = $_POST["Phone"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];
$Subject = $_POST["Subject"];


$sql = "UPDATE students SET Firstname='$Firstname',Lastname='$Lastname',Birthday='$Birthday',
Gender='$Gender',Age='$Age',Career='$Career',Village='$Village',District='$District',Province='$Province',Phone='$Phone',Email='$Email',Password='$Password',Subject='$Subject'
 WHERE id=$id ";

echo $sql;

$result = mysqli_query($Connect,$sql);

if($result){
   header("location:showdata.php");
   exit(0);
}else{
   echo "ເກີດຂໍ້ຜິດພາດເກີດຂື້ນ".mysqli_error($Connect);
}


?>