<?php
   require('connectdb.php');

   $id = $_GET["deleteid"];

   echo $id;

   $sql = "DELETE FROM students WHERE Id = $id";

   $result = mysqli_query($Connect,$sql);

   if($result){
      header("location:showdata.php");
      exit(0);
   }else{
      echo "ເກີດຂໍ້ຜິດພາດເກີດຂື້ນ";
   }
?>