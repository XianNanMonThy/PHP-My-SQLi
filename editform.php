<?php 
require('connectdb.php');

$id = $_GET["id"];

// echo $id;

$sql = "SELECT * FROM students WHERE Id = $id";

$result = mysqli_query($Connect,$sql);

$row = mysqli_fetch_assoc($result);

//print_r($row);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ແບບຟຣອມແກ້ໄຂຂໍ້ມູນນັກສຶກສາ</title>
  <link rel="stylesheet" href="style_form.css"> 
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
      h1.text-center{
      font-size: 60px;
      color: #ffff;
      font-weight: 900;
      }      *{
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
      h1.text-center{
      font-size: 60px;
      color: #ffff;
      font-weight: 900;
      }
  </style>
  
</head>
<body>
  <div class="container my-4">
    <form class="row g-3" action="update.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $row["Id"]; ?>">
      <h1 class="text-center ">ຟຣອມແກ້ໄຂການລົງທະບຽນ</h1>
      <div class="col-md-6 form-group">
        <label for="Firstname" class="form-label">ຊື່</label>
        <input type="text" name="Firstname" class="form-control" value="<?php echo $row["Firstname"]; ?>">
      </div>
      <div class="col-md-6 form-group">
        <label for="Lastname" class="form-label">ນາມສະກຸນ</label>
        <input type="text" name="Lastname" class="form-control" value="<?php echo $row["Lastname"]; ?>">
      </div>
      <div class="col-md-6 form-group">
        <label for="Birthday" class="form-label">ວັນ ເດືອນ ປີເກີດ</label>
        <input type="date" name="Birthday" class="form-control" value="<?php echo $row["Birthday"]; ?>">
      </div>
      <div class="col-md-6 form-group">
        <label for="Gender" class="form-label">ເພດ</label>
        <div class="form-control">
          <?php 
          if($row["Gender"]=="male"){
            echo "<input type='radio' name='Gender' value='male' checked>ຊາຍ";
            echo "<input type='radio' name='Gender' value='female'>ຍິງ";
            echo "<input type='radio' name='Gender' value='Other'>ອື່ນໆ";
          }else if($row["Gender"]=="female"){
            echo "<input type='radio' name='Gender' value='male'>ຊາຍ";
            echo "<input type='radio' name='Gender' value='female' checked>ຍິງ";
            echo "<input type='radio' name='Gender' value='Other'>ອື່ນໆ";
          }else{
            echo "<input type='radio' name='Gender' value='male'>ຊາຍ";
            echo "<input type='radio' name='Gender' value='female'>ຍິງ";
            echo "<input type='radio' name='Gender' value='Other' checked>ອື່ນໆ";
          }
          ?>
        </div>
      </div>
      <div class="col-md-6 form-group">
        <label for="Age" class="form-label">ອາຍຸ</label>
        <input type="text" name="Age" class="form-control" value="<?php echo $row["Age"]; ?>">
      </div>
      <div class="col-md-6 form-group">
        <label for="Career" class="form-label">ອາຊີບ</label>
        <input type="text" name="Career" class="form-control" value="<?php echo $row["Career"]; ?>">
      </div>
      <div class="col-md-6 form-group">
        <label for="Village" class="form-label">ບ້ານ</label>
        <input type="text" name="Village" class="form-control" value="<?php echo $row["Village"]; ?>">
      </div>
      <div class="col-md-6 form-group">
        <label for="District" class="form-label">ເມືອງ</label>
        <input type="text" name="District" class="form-control" value="<?php echo $row["District"]; ?>">
      </div>
      <div class="col-md-6 form-group">
        <label for="Province" class="form-label">ແຂວງ</label>
        <input type="text" name="Province" class="form-control" value="<?php echo $row["Province"]; ?>">
      </div>
      <div class="col-md-6 form-group">
        <label for="Phone" class="form-label">ເບີໂທ</label>
        <input type="text" name="Phone" class="form-control" value="<?php echo $row["Phone"];?>">
      </div>
      <div class="col-md-6 form-group">
        <label for="Email" class="form-label">ອີເມວ</label>
        <input type="email" name="Email" class="form-control" value="<?php echo $row["Email"]; ?>">
      </div>
      <div class="col-md-6 form-group">
        <label for="Password" class="form-label">ລະຫັດຜ່ານ</label>
        <input type="password" name="Password" class="form-control" value="<?php echo $row["Password"]; ?>">
      </div>
      <div class="col form-group">
        <label for="Subject" class="form-label">ສາຂາຮຽນ</label>
        <select class="form-select" name="Subject">    
          <option class="text-dark" value="ເຕັກໂນໂລຊີ ຂໍ້ມູນຂ່າວສານ (IT)"<?php if($row["Subject"]=="ເຕັກໂນໂລຊີ ຂໍ້ມູນຂ່າວສານ (IT)"){echo "SELECTED";} ?>>ເຕັກໂນໂລຊີ ຂໍ້ມູນຂ່າວສານ (IT)</option>
          <option class="text-dark" value="ວິສະວະກຳໄຟຟ້າ" <?php if($row["Subject"]=="ວິສະວະກຳໄຟຟ້າ"){echo "SELECTED";} ?>>ວິສະວະກຳໄຟຟ້າ</option>
          <option class="text-dark" value="ການບໍລິກາານໂຮງແຮມ ແລະ ທ່ອງທ່ຽວ" <?php if($row["Subject"]=="ການບໍລິກາານໂຮງແຮມ ແລະ ທ່ອງທ່ຽວ"){echo "SELECTED";} ?>>ການບໍລິກາານໂຮງແຮມ ແລະ ທ່ອງທ່ຽວ</option>
          <option class="text-dark" value="ຄຸ້ມຄອງຫ້ອງການ" <?php if($row["Subject"]=="ຄຸ້ມຄອງຫ້ອງການ"){echo "SELECTED";} ?>>ຄຸ້ມຄອງຫ້ອງການ</option>
          <option class="text-dark" value="ພາສາອັງກິດທຸລະກິດ" <?php if($row["Subject"]=="ພາສາອັງກິດທຸລະກິດ"){echo "SELECTED";} ?>>ພາສາອັງກິດທຸລະກິດ</option>
          <option class="text-dark" value="ການບັນຊີວິສາຫະກິດ" <?php if($row["Subject"]=="ການບັນຊີວິສາຫະກິດ"){echo "SELECTED";} ?>>ການບັນຊີວິສາຫະກິດ</option>
          <option class="text-dark" value="ອາຫາານ-ການໂຮງແຮມ" <?php if($row["Subject"]=="ອາຫາານ-ການໂຮງແຮມ"){echo "SELECTED";} ?>>ອາຫາານ-ການໂຮງແຮມ</option>
        </select>
      </div>
      <div class="text-center">
      <a href="index.php" class="btn btn-outline-success me-5">ໜ້າຫຼັກ</a>
      <input class="btn btn-primary me-5" type="submit" onclick="return confirm('ທ່ານຕ້ອງການແກ້ໄຂຂໍ້ມູນນີ້ ແມ່ນບໍ່?')" value="ແກ້ໄຂຂໍ້ມູນ">
      <a href="showdata.php" class="btn btn-danger " type="reset" onclick="return confirm('ທ່ານບໍ່ຕ້ອງການແກ້ໄຂຂໍ້ມູນນີ້ ແມ່ນບໍ່?')">ຍົກເລີກ</a>
      </div>
    </form>
    
  </div>
</body>
</html>