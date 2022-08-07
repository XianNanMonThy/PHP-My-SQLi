 <?php
 
  session_start();
 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ແບບຟຣອມລົງທະບຽນ</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="fontawesome/js/all.js"></script>
  <style>
    *{
      margin: 0;
      padding: 0;
      font-family: 'Times New Roman', Times, serif,'Saysettha OT';
     }
    body{
      height: 100%;
      width: 100%;
      background-image:url("image/china.jpg");
      background-size: cover;
      background-position: center;
      
    }
    input{
      border: none;
      margin: 10px 0;
      padding: 0 10px;
    }
    .row input[type="text"],.row input[type="date"],.row input[type="radio"],.row input[type="email"],.row input[type="password"]{
      color: #ffff;
      background: rgba(000, 000, 000, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2) ;
    }
    .row input[type="text"]::placeholder,.row input[type="date"]::placeholder,.row input[type="radio"]::placeholder,.row input[type="email"]::placeholder,.row input[type="password"]::placeholder{
      color: #ffff;
      background: rgba(000, 000, 000, 0.1);
    }
    .row .form-control{
      color: #ffff;
      background: rgba(000, 000, 000, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2) ;
    }
    .row .form-select{
      color: #fff;
      background: rgba(000, 000, 000, 0.1);
      border: 1px solid rgba(255, 255, 255, 0.2) ;
    }
    .row .form-label{
      color:#ffff;
      font-size: 18px;
      font-weight: 500;
    }
    h1.display-5{
      font-size: 60px;
      color: #ffff;
      font-weight: 900;
    }
  </style>
</head>
<body>
  <div class="container my-4">
    <form class="row g-3" action="insert.php" method="POST">
      
      <?php if(isset($_SESSION["error"])) { ?>
         <div class="alert alert-danger" role="alert">
            <?php
               echo $_SESSION["error"];
               unset ($_SESSION["error"]);
            ?>
         </div>
      <?php } ?>
       <?php if(isset($_SESSION["warning"])) { ?>
         <div class="alert alert-danger" role="alert">
            <?php
               echo $_SESSION["warning"];
               unset ($_SESSION["warning"]);
            ?>
         </div>
      <?php } ?>
      <h1 class="text-center display-5 ">ຟຣອມປະກອບການລົງທະບຽນ</h1>
      <div class="col-md-6 form-group">
        <label for="Firstname" class="form-label">ຊື່</label>
        <input type="text" name="Firstname" class="form-control" id="" placeholder="ກະລຸນາປ້ອນຊື່...">
      </div>
      <div class="col-md-6 form-group">
        <label for="Lastname" class="form-label">ນາມສະກຸນ</label>
        <input type="text" name="Lastname" class="form-control" id="" placeholder="ກະລຸນາປ້ອນນາມສະກຸນ...">
      </div>
      <div class="col-md-6 form-group">
        <label for="Birthday" class="form-label">ວັນ ເດືອນ ປີເກີດ</label>
        <input type="date" name="Birthday" class="form-control" id="">
      </div>
      <div class="col-md-6 form-group">
        <label for="Gender" class="form-label">ເພດ</label>
        <div class="form-control">
          <input type="radio" name="Gender" value="male" id="">ຊາຍ
          <input type="radio" name="Gender" value="female" id="">ຍິງ
          <input type="radio" name="Gender" value="Other" id="">ອື່ນໆ
        </div>
      </div>
      <div class="col-md-6 form-group">
        <label for="Age" class="form-label">ອາຍຸ</label>
        <input type="text" name="Age" class="form-control" id="" placeholder="ກະລຸນາປ້ອນອາຍຸ..." aria-describeddy="Age">
      </div>
      <div class="col-md-6 form-group">
        <label for="Career" class="form-label">ອາຊີບ</label>
        <input type="text" name="Career" class="form-control" id="" placeholder="ກະລຸນາປ້ອນອາຊີບ...">
      </div>
      <div class="col-md-6 form-group">
        <label for="Village" class="form-label">ບ້ານ</label>
        <input type="text" name="Village" class="form-control" id="" placeholder="ກະລຸນາປ້ອນຊື່ບ້ານ...">
      </div>
      <div class="col-md-6 form-group">
        <label for="District" class="form-label">ເມືອງ</label>
        <input type="text" name="District" class="form-control" id="" placeholder="ກະລຸນາປ້ອນຊື່ເມືອງ...">
      </div>
      <div class="col-md-6 form-group">
        <label for="Province" class="form-label">ແຂວງ</label>
        <input type="text" name="Province" class="form-control" id="" placeholder="ກະລຸນາປ້ອນຊື່ແຂວງ...">
      </div>
      <div class="col-md-6 form-group">
        <label for="Phone" class="form-label">ເບີໂທ</label>
        <input type="text" name="Phone" class="form-control" id="" placeholder="ກະລຸນາປ້ອນເລກໂທລະສັບ...">
      </div>
      <div class="col-md-6 form-group">
        <label for="Email" class="form-label">ອີເມວ</label>
        <input type="email" name="Email" class="form-control" id="" placeholder="ກະລຸນາປ້ອນອີເມລ...">
      </div>
      <div class="col-md-6 form-group">
        <label for="Password" class="form-label">ລະຫັດຜ່ານ</label>
        <input type="password" name="Password" class="form-control" id=""  placeholder="ປ້ອນລະຫັດຜ່ານ...">
      </div>
      <div class="col form-group">
        <label for="Subject" class="form-label">ສາຂາຮຽນ</label>
        <select class="form-select" name="Subject">
          <option value="ເຕັກໂນໂລຊີ ຂໍ້ມູນຂ່າວສານ (IT)" class="text-dark">ເຕັກໂນໂລຊີ ຂໍ້ມູນຂ່າວສານ (IT)</option>
          <option value="ວິສະວະກຳໄຟຟ້າ" class="text-dark">ວິສະວະກຳໄຟຟ້າ</option>
          <option value="ການບໍລິກາານໂຮງແຮມ ແລະ ທ່ອງທ່ຽວ" class="text-dark">ການບໍລິກາານໂຮງແຮມ ແລະ ທ່ອງທ່ຽວ</option>
          <option value="ຄຸ້ມຄອງຫ້ອງການ" class="text-dark">ຄຸ້ມຄອງຫ້ອງການ...</option>
          <option value="ພາສາອັງກິດທຸລະກິດ" class="text-dark">ພາສາອັງກິດທຸລະກິດ</option>
          <option value="ການບັນຊີວິສາຫະກິດ" class="text-dark">ການບັນຊີວິສາຫະກິດ</option>
          <option value="ອາຫາານ-ການໂຮງແຮມ" class="text-dark">ອາຫາານ-ການໂຮງແຮມ</option>
        </select>
      </div>
      <div class="text-center">
      <a href="index.php" class="btn btn-success me-5">ໜ້າຫຼັກ</a>
      <input class="btn btn-primary me-5" name="insert" type="submit"  value="ລົງທະບຽນ">
      <input class="btn btn-danger " type="reset" value="ຍົກເລີກ">
      </div>
    </form>
    
  </div>
</body>
</html>