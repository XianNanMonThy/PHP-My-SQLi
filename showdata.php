<?php
require('connectdb.php');
$sql = "SELECT * FROM students ORDER BY Firstname ASC";
$result = mysqli_query($Connect,$sql);

$count = mysqli_num_rows($result);

$oder=1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ຂໍ້ມູນໃນຖານຂໍ້ມູນ</title>
  <link rel="stylesheet" href="style-data.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="fontawesome/js/all.js"></script>
  <style>
      *{
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: 'Consola Mono','Saysettha OT';
         font-size: 12px;
      }
      h1.text-center{
         font-weight: 900;
      }
  </style>
</head>
<body>
 <div class="container-fluid">
  <h1 class="text-center my-3 display-5">ຂໍ້ມູນນັກສືກສາໃນຖານຂໍ້ມູນ</h1>
  <hr class="border border-dark border-5">
  <?php if($count>0) {?>
    <div><h3 class="fw-bolder">ການຄົ້ນຫາ:</h3></div>
    <form class="d-flex form-group mb-3" action="search.php" method="POST">
      <input class="form-control me-1 d-flex" type="search" name="Search" placeholder="ຄົ້ນຫາ....">
      <button class="btn btn-success me-md-2" type="submit"><i class="fas fa-search"></i></button>
   </form>
    <table class="table table-bordered border-dark">
      <thead>
        <tr>
          <th>ລະຫັດ</th>
          <th>ຊື່</th>
          <th>ນາມສະກຸນ</th>
          <th>ວັນເດືອນປີເກີດ</th>
          <th>ເພດ</th>
          <th>ອາຍຸ</th>
          <th>ອາຊີບ</th>
          <th>ບ້ານ</th>
          <th>ເມືອງ</th>
          <th>ແຂວງ</th>
          <th>ເບີໂທ</th>
          <th>ອີເມວ</th>
          <th>ລະຫັດຜ່ານ</th>
          <th>ສາຂາຮຽນ</th>
          <th>ເວລາບັນທຶກ</th>
          <th>ແກ້ໄຂຂໍ້ມູນ</th>
          <th>ລົບຂໍ້ມູນ</th>
        </tr>
      </thead>
      <tbody>
        <?php while($row=mysqli_fetch_assoc($result)){?>
        <tr>
          <td><?php echo $oder++; ?></td>
          <td><?php echo $row["Firstname"]; ?></td>
          <td><?php echo $row["Lastname"]; ?></td>
          <td><?php echo $row["Birthday"]; ?></td>
          <td>
            <?php if($row["Gender"]=="male") {?>
              ຊາຍ
            <?php }else if($row["Gender"]=="female"){?>
              ຍິງ
            <?php }else{ ?>
              ອື່ນໆ
            <?php } ?>
          </td>
          <td><?php echo $row["Age"]; ?></td>
          <td><?php echo $row["Career"]; ?></td>
          <td><?php echo $row["Village"]; ?></td>
          <td><?php echo $row["District"]; ?></td>
          <td><?php echo $row["Province"]; ?></td>
          <td><?php echo $row["Phone"]; ?></td>
          <td><?php echo $row["Email"]; ?></td>
          <td><?php echo $row["Password"]; ?></td>
          <td><?php echo $row["Subject"]; ?></td>
          <td><?php echo $row["SaveTime"]; ?></td>
          <td>
            <a href="editform.php?id=<?php echo $row["Id"];?>" class="btn btn-warning">ແກ້ໄຂ</a>
          </td>
          <td>
            <a href="delete.php?deleteid=<?php echo $row["Id"];?>"class="btn btn-danger"
            onclick="return confirm('ທ່ານແນ້ໃຈວ່າຈະຕ້ອງການລົບຂໍ້ມູນນີ້ ແມ່ນບໍ່?')">ລົບ</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php }else{?>
      <div class="alert alert-danger">
       <h2 class="display-6 text-center">ບໍ່ພົບຂໍ້ມູນຂອງນັກສຶກສາໃນຖານຂໍ້ມູນ !!!</h2>
      </div>
    <?php } ?>
    <a href="index.php" class="btn btn-primary">ໜ້າຫຼັກ</a>
    <a href="form.php" class="btn btn-success">ເພີ່ມຂໍ້ມູນ</a>
</div>
</body>
</html>