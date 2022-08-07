<?php

session_start();

        // ເຊື່ອມຕໍ່ກັບຖານຂໍ້ມູນ

require('connectdb.php');

        // ຮັບຄ່າຈາກຟຣອມບັນທຶກຂໍ້ມູນ Check ຄ່າແຕ່ລະຕົວແປ່ຣ

    if(isset($_POST["insert"])){
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

      // ກວດສອບວ່າມີຂໍ້ມູນຫຼືບໍ່

      if(empty($_POST["Firstname"])){
        $_SESSION["error"] = 'ກະລຸນາປ້ອນຊື່ຂອງທ່ານ';
        header("Location: form.php");
      }else if(empty($_POST["Lastname"])){
        $_SESSION["error"]= 'ກະລຸນາປ້ອນນາມສະກຸນຂອງທ່ານ';
        header("Location: form.php");
      }else if(empty($_POST["Birthday"])){
        $_SESSION["error"]= 'ກະລຸນາເລືອກວັນເດືອນປີເກີດຂອງທ່ານ';
        header("Location: form.php");
      }else if(empty($_POST["Gender"])){
        $_SESSION["error"]= 'ກະລຸນາເລືອກເພດ';
        header("Location: form.php");
      }else if(empty($_POST["Age"])){
        $_SESSION["error"]= 'ກະລຸນາປ້ອນອາຍຸຂອງທ່ານ';
        header("Location: form.php");
      }else if(empty($_POST["Career"])){
        $_SESSION["error"]= 'ກະລຸນາປ້ອນອາຊີບ';
        header("Location: form.php");
      }else if(empty($_POST["Village"])){
        $_SESSION["error"]= 'ກະລຸນາປ້ອນຊື່ບ້ານ';
        header("Location: form.php");
      }else if(empty($_POST["District"])){
        $_SESSION["error"]= 'ກະລຸນາປ້ອນຊື່ເມືຶອງ';
        header("Location: form.php");
      }else if(empty($_POST["Province"])){
        $_SESION["error"]='ກະລຸນາປ້ອນຊື່ແຂວງ';
        header("location: from.php");
      }else if(empty($_POST["Phone"])){
        $_SESSION["warning"]= 'ກະລຸນາປ້ອນເບີໂທລະສັບ';
        header("Location: form.php");
      }else if(empty($_POST["Email"])){
        $_SESION["warning"]='ກະລຸນາປ້ອນອີເມລຂອງທ່ານ';
        header("location: from.php");
      }else if(empty($_POST["Password"])){
        $_SESSION["warning"]='ກະລຸນາປ້ອນລະຫັດຜ່ານຂອງທ່ານ';
        header(" location: from.php");
      }else if(empty($_POST["Subject"])){
        $_SESSION["error"]= 'ກະລຸນາເລືອກສາຂາຮຽນ';
        header("Location: form.php");
      }else{

          // ການບັນທຶກ
        $sql= "INSERT INTO students(Firstname,Lastname,Birthday,Gender,Age,Career,Village,District,Province,Phone,Email,Password,Subject) 
        VALUE('$Firstname','$Lastname','$Birthday','$Gender','$Age','$Career','$Village','$District','$Province','$Phone','$Email','$Password','$Subject')";
  
          // echo $sql;
        $result = mysqli_query($Connect,$sql);//ສັງລັນຄຳສັ່ງ SQL

        if($result){
          header("location:showdata.php");
        
        }else{
          echo mysqli_error($Connect);
        }
      }
    }
 ?>