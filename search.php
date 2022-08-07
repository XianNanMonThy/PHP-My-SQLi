<?php

require('connectdb.php');
//echo $_POST["Search"];

$name = $_POST["Search"];


$sql = "SELECT * FROM students WHERE Firstname LIKE '%$name%' ORDER BY Firstname ASC";

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
  <title>ການຄົ້ນຫາຂໍ້ມູນ</title>
  <link rel="stylesheet" href="style-data.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="FontAwesome/css/all.css">
  <script src="bootstrap/js/bootstrap.min.js"></script>
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
  <h1 class="text-center my-3 display-5">ຂໍ້ມູນທີ່ພົບໃນການຄົ້ນຫາ</h1>
  <hr class="border border-dark border-5">
  <?php if($count>0) {?>
   <form class="d-flex py-4" action="search.php" method="POST">
      <input class="form-control me-1" type="search" name="Search" placeholder="ຄົ້ນຫາ....">
      <button class="btn btn-success me-md-2" type="submit" ><i class="fas fa-search"></i></button>
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
          <th>ແກ້ໄຂ</th>
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
            <a href="editForm.php?id=<?php echo $row["Id"];?>" class="btn btn-warning">ແກ້ໄຂ</a>
          </td>
          <td>
            <a href="delete.php?deleteid=<?php echo $row["Id"]; ?>
            " class="btn btn-danger"
            onclick="return confirm('ທ່ານຕ້ອງການລົບຂໍ້ມູນນີ້ ແມ່ນບໍ່?')">ລົບ</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  <?php }else{?>
    <div class="alert alert-danger">
      <h2 class="display-6 text-center">ບໍ່ພົບຂໍ້ມູນທີ່ຄົ້ນຫາ.. !!!</h2>
    </div>
    <?php }?>
    <a href="showdata.php" class="btn btn-success">ຍ້ອນກັບ</a>
    </form>
</div>
</body>

</html>