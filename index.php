<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ສະຖາບັນ ບຸນເກີດ ສຶກສາ BIS</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <script src="fontawesome/js/all.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.0/font/bootstrap-icons.css">
</head>

<body>

  <!-- ການສ້າງ navbar -->
  <nav class="navbar navbar-expand-xl navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a href="" class="navbar-brand">
        <img src="image/ສະຖາບັນ.png" alt="" srcset="" width="55" height="51">
        ສະຖາບັນ ບຸນເກີດ ສຶກສາ BIS
      </a>
      <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar1">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="navbar1" class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link"><i class="bi bi-house-fill fa-1x "></i>&nbsp;ໜ້າຫຼັກ</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#about" class="nav-link"><i class="bi bi-file-person-fill fa-1x"></i>&nbsp;ກ່ຽວກັບໂຮງຮຽນ</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#gallary" class="nav-link"><i class="bi bi-image-fill fa-1x"></i>&nbsp;ຮູບພາບ</a>
          </li>
        </ul>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link me-4" data-bs-toggle="modal" data-bs-target="#myModal"><i class="bi bi-card-heading fa-1x"></i>&nbsp;ຕິດຕໍ່ໂຮງຮຽນ</a>
          </li>
        </ul>
        <form class="d-flex py-2">
          <input class="form-control me-1" type="search" placeholder="ຄົ້ນຫາ...." aria-label="Search">
          <button class="btn btn-success me-md-2" type="submit"><i class="fas fa-search"></i></button>
        </form>
        <a class="btn btn-outline-success me-2" type="button" href="login.php">ເຂົ້າສູ່ລະບົບ</a>
        <a class="btn btn-outline-dark" type="button" href="form.php">ລົງທະບຽນ</a>
      </div>
    </div>
  </nav>

  <!-- ການສ້າງ Slider -->
  <section id="slider">
      <div class="carousel slide" data-bs-ride="carousel" id="Slider">
        <ol class="carousel-indicators">
          <button data-bs-target="#Slider" data-bs-slide-to="0" class="active"></button>
          <button data-bs-target="#Slider" data-bs-slide-to="1"></button>
          <button data-bs-target="#Slider" data-bs-slide-to="2"></button>
        </ol>
         <div class="carousel-inner">
            <div class="carousel-item carousel-image-1 active">
               <div class="container">
                  <div class="carousel-caption d-none d-sm-block">
                    <h1 class="display-2 ">ສະຖາບັນ ບຸນເກີດ ສຶກສາ BIS</h1> 
                    <p class="display-4 ">ສ້າງສັນ ຊີວິດ ສົດໃສ </p>
                  </div>
               </div>
            </div>
            <div class="carousel-item carousel-image-2">
               <div class="container">
                  <div class="carousel-caption d-none d-sm-block">
                    <h1 class="display-3"> ພີທີສະຫຼຸບ </h1> 
                    <p class="display-5">ການຮຽນ-ການສອນ ສົກຮຽນ 2019-2020</p>
                  </div>
               </div>
            </div>
            <div class="carousel-item carousel-image-3">
               <div class="container">
                  <div class="carousel-caption d-none d-sm-block">
                    <h1 class="display-2">ນັກກິລາ BIS</h1> 
                    <p class="display-5">ຂວັນໃຈນັກກິລາ ພັດທະນາໃຫ້ກ້າວໜ້າ</p>
                  </div>
               </div>
            </div>
            <button class="carousel-control-prev" data-bs-target="#Slider" data-bs-slide="prev">
              <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" data-bs-target="#Slider" data-bs-slide="next">
              <span class="carousel-control-next-icon"></span>
            </button>
         </div>
      </div>
  </section>

  <!-- ບໍລິການ Service -->
  <section id="service" class="py-5">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 text-center mb-4 ">
         <i class="fas fa-user-graduate fa-3x py-2"></i>
          <h3 class="fw-bolder">ການສຶກສາ</h3>
          <p class="fs-5 text-start">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            ສະຖາບັນ ບຸນເກີດ ສຶກສາ BIS ເປັນສະຖານທີ່ການສຶກສາແຫ່ງໜຶ່ງ ທີຢູ່ພາຍໃຕ້ການສຶກສາບູນເກີດ ແລະ ໄດ້ຮັບການອະນຸມັດສ້າງຕັ້ງເປັນທາງການ 
            ຈາກກະຊວງສຶກສາ ແລະ ກິລາ ສະບັບເລກທີ979/ສສກ,ລົງວັນທີ 23 ກຸມພາ 2017 ແລະ ໄດ້ດຳເນີນການຮຽນ-ການສອນຝຶກອົບຮົມໄລຍະສັິ້ນ,
            ຫຼັກສູດຊັ້ນຕົ້ນ,ຫຼັກສູດຊັ້ນກາງ ແລະ ຫຼັກສູດຊັ້ນສູງ ລະບົບ 3ປີ ເປີດຮັບນັກຮຽນ,ນັກສຶກສາໃນທຸກໆປີເຊິ່ງເປິດຮັບຕັ້ງແຕ່ເດັກອະນູບານ,ປະຖົມມັດທະຍົມສຶກສາຕອນຕົ້ນ,
            ຕອນປາຍ ແລະ ໂຮງຮຽນ ເຕັກນິກ-ວິຊາຊີບ ຊັ້ນຕົ້ນ,ຊັ້ນກາງ ແລະ ຊັ້ນສູງ.ຫຼັກສູດການຮຽນການສ່ອນປະກອບມີດັ່ງນີ້:</p>
          <div class="container-fluid">
          <ol class="text-start"><b class="fs-5">ຫຼັກສຸດຊັ້ນຕົ້ນ</b>
             <li class="fs-5">ສາຂາວິຊາ ໄຟຟ້າຕິດຕັ້ງເຄື່ອງເຢັນ</li>
             <li class="fs-5">ສາຂາວິຊາ ຊ່າງຈອດໂລຫະ (ຈອດໄຟຟ້າ ແລະ ຈອດອົກຊີ)</li>
             <li class="fs-5">ສາຂາວິຊາ ຊ່າງເດີນສາຍໄຟອາຄານ</li>
             <li class="fs-5">ສາຂາວິຊາ ຊ່າງປູນກໍ່ໂບກ</li> 
             <li class="fs-5">ສາຂາວິຊາ ຊ່າງປູກສ້າງອາຄານດ້ອຍໄມ້</li>
             <li class="fs-5">ສາຂາສາຂາການບັນຊີ</li>
             <li class="fs-5">ສາຂາວິຊາ ຊ່າງປູນກໍ່ໂບກ</li>
          </ol>
          <ol class="text-start  "><b class="fs-5">ຫຼັກສຸດຊັ້ນກາງ</b>
             <li class="fs-5">ສາຂາວິຊາ ໄຟຟ້າເຕັກນິກ</li>
             <li class="fs-5">ສາຂາວິຊາ ຄຸ້ມຄອງຫ້ອງການ ແລະ ການບັນຊີ</li>
             <li class="fs-5">ສາຂາວິຊາ ໄອທີ ແລະ ການສ້ອມແປງ</li>
             <li class="fs-5">ສາຂາວິຊາ ປຸ່ງແຕ່ງອາຫານ ແລະ ການບໍ່ລິຫານໂຮງແຮມ</li>
             <li class="fs-5">ສາຂາວິຊາ ຊ່າງເຕັກນິກການກໍ່ສ້າງເຄຫະສະຖານ</li>
          </ol>
          <ol class="text-start fs-5 "><b class="fs-5">ຫຼັກສຸດຊັ້ນສູງ</b>
             <li class="fs-5">ສາຂາວິຊາ ບໍລິການການໂຮງແຮມ ແລະ ທ່ອງທ່ຽວ</li>
             <li class="fs-5">ສາຂາວິຊາ ການບັນຊີວິສາຫະກິດ</li>
             <li class="fs-5">ສາຂາວິຊາ ຄຸ້ມຄອງຫ້ອງການ</li>
             <li class="fs-5">ສາຂາວິຊາ ວິສະວະກຳໄຟຟ້າ</li>
             <li class="fs-5">ສາຂາວິຊາ ຊ່າງທ່າສີອາຄານ</li>
             <li class="fs-5">ສາຂາວິຊາ ຄອມພີວເຕີທຸລະກິດ (IT)</li>
             <li class="fs-5">ສາຂາວິຊາ ພາສາອັງກິດທຸລະກິດ</li>
          </ol>
          </div>
        </div>
        <div class="col-md-4 text-center mb-4">
         <i class="fas fa-users-line fa-3x py-2"></i>
          <h3 class="fw-bolder">ກິດຈະກຳ</h3>
          <p class="fs-5 text-start">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ໂຮງຮຽນ ສະຖານ ບັນບຸນເກີດ ສຶກສາ ບີໄອອັສ ນອກຈາກເປັນແຫຼ່ງການສຶກສາແລ້ວຫຍັງມີກິດຈະກຳຕ່າງໆ ເພື່ອໃຫ້ນັກຮຽນນັກສຶກມີການເຄື່ອນໄຫວ ອອກກຳລັງກາຍໃນທຸກວັນຫຼັງຈາກເລີກໂຮງຮຽນເຊັ່ນ:ການຫຼິ້ນກິລາບານເຕະ,ສະນຸກເກີ້ ແລະ ອ່າງລ່ອຍນ້ຳ, ນອກຈາກນັ້ນ,ຍັງໄດ້ໄປທ່ຽວສົມສະຖານທີ່ທ່ອງທ່ຽວຕ່າງໆໃນທຸກໆອາທິດ,ທຸກເດືອນ ແລະ ທຸກໆປີ.</p>
          <p class="fs-5 text-start">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ນອກຈາກນັ້ນ, ຍັງໄດ້ໄປຮ່ວມກິດຈະກຳເຊັ່ນ: ການແຂງຂັນກິລາບານເຕະ </p>
        </div>
        <div class="col-md-4 text-center mb-4">
          <i class="fas fa-people-roof fa-3x py-2"></i>
          <h3 class="fw-bolder">ຫໍ່ພັກ</h3>
          <p class="fs-5 text-start">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ໃນກໍລະນີ ມີນັກຮຽນຕ່າງແຂວງທີ່ສົນໃຈຢາກມາຮຽນ ຫຼື ຜູ້ທີ່ກຳລັງຮຽນຈົບມັດທະຍົມສຶກສາ ຢາກຈະມາຮຽນຕໍ່ ວິຊາຊີບ ທາງໂຮງຮຽນ ສະຖາບັນ ບຸນເກີດ ສືກສາ ບີໄອເອສ ມີຫໍ່ພັກໃຫ້ຢູ່</p>
        </div>
      </div>
    </div>
  </section>

  <!-- gallary -->
  <section id="gallary" class="py-5">
     <div class="container-fluid">
        <h3 class="text-center fw-bolder">ຮູບພາບ</h3>
        <p class="text-center fs-5">ຮູບພາບລ່ວມ ກິດຈະກຳ,ການສຶກສາ ແລະ ຮ່ວມງານຕ່າງໆ</p>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/9.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/10.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/20.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/23.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/46.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/59.jpeg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/1.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/2.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/3.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/4.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/5.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/6.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/7.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/8.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/12.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/13.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/14.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/15.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/16.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/17.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/18.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/21.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/22.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/33.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/34.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/35.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/37.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/40.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/41.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/42.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/43.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/44.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/45.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/47.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/48.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/49.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/50.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/51.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/52.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/53.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/54.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/55.jpeg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/56.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/58.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/61.jpeg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/62.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/63.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/64.jpeg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/65.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/66.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/67.jpeg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/68.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/flower.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/road-ge.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/avenue.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/dark.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/rain.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/river.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/tree.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/rose.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/16.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/24.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/25.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/26.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/27.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/28.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/29.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/30.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/31.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/32.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/36.jpg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/38.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/57.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/60.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/69.jpeg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/1.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/2.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/3.jpeg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/4.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/5.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/6.jpeg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/7.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/8.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/9.jpeg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/10.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/15.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/17.jpeg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/18.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/19.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/20.jpeg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/21.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/22.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/23.jpeg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/24.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/25.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/26.jpeg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
         <div class="row mb-4">
            <div class="col-md-4">
               <img src="image/27.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/28.jpeg" alt="" srcset="" class="img-fluid">
            </div>
            <div class="col-md-4">
               <img src="image/stars.jpg" alt="" srcset="" class="img-fluid">
            </div>
         </div>
      </div>
  </section>

  <!-- ກ່ຽວກັບໂຮງຮຽນ  -->
  <section id="about" class="p-3 img-fluid">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container pt-5">
            <h1 class="fw-bolder">ກ່ຽວກັບໂຮງຮຽນ</h1>
            <p class="fs-5 text-start">ໂຮງຮຽນ ເຕັກນິກ-ວິຊາຊີບ ບີ.ໄອ.ເອສ ບຸນເກີດ  ຕັ້ງຢູ່ ບ້ານ ໄຊມຸງຄຸນ, ເມືອງ ນາຊາຍທອງ ແຂວງ ນະຄອນຫຼວງວຽງຈັນ ຕິດກັບໄຟແດງເສັ້ນທາງດ່ວນ ເຊິ່ງເປັນສະຖານທີ່ ທີ່ຊອກຫາໄດ້ງ່າຍ ແລະ ສະດວກສະບາຍໃນການໄປມາ ນອກຈາກນັ້ນ, ໂຮງຮຽນ ເຕັກນິກ-ວິຊາຊີບ ບີ.ໄອ.ເອສ ບຸນເກີດນີ້ ມີການຮູບແບບການຮຽນ-ການສອນ ແບບຮຽນທິດສະດີ ແລະ
               ປະຕິບັດຕົວຈິ່ງ ດ້ານວິຊາສະເພາະ </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="myModal">
     <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <div class="container">
                  <h2 class="modal-titel text-center">ຕິດຕໍ່ຫາໂຮງຮຽນ</h2>
              </div>
              <button class="btn-close" data-bs-dismiss="modal"></button>
           </div>
           <div class="modal-body">
              <form action="">
                 <div class="form-group">
                    <label for=""><strong>ອີເມລ:</strong></label>
                    <input type="email" name="" id="" class="form-control">
                 </div>
                 <div class="form-group">
                    <label for=""><strong>ກ່ຽວກັບຫົວຂໍ້:</strong></label>
                    <input type="text" name="" id="" class="form-control">
                 </div>
                 <div class="form-group">
                    <label for=""><strong>ລາຍລະອຽດ:</strong></label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                 </div>
              </form>
           </div>
           <div class="modal-footer">
              <div class="container text-center">
                 <button class=" btn-secondary me-5" data-bs-dismiss="modal">ຍົກເລີກ</button>
                 <button class=" btn-success">ສົ່ງຂໍ້ມູນ</button>
              </div>
           </div>
        </div>
     </div>
  </div>

  <!-- footer   -->
  <footer class=" text-center img-fluid">
      <div class="container-fluid card text-white bg-primary p-2">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-4 text-center mb-4 p-3">
                  <div class="container-fluid p-4">
                     <i class="fab fa-whatsapp fa-2x"></i>
                  </div>
                  <div>
                     <i class="fas fa-envelope fa-2x"></i>
                  </div>
               </div>
               <div class="col-md-4 text-center mb-5">
                  <img src="image/ສະຖາບັນ.png" alt="" srcset="" width="40" height="37">
                  <h5>ສະຖາບັນ ບຸນເກີດ ສຶກສາ BIS</h5>
                  <p class="bloid">Copyright <i class="fas fa-copyright "></i> ສະຖາບັນ ບຸນເກີດ ສຶກສາ</p>
                  <p class="bloid">ຢູ່ພາຍໃຕ້ ລິຂະສິດຂອງໂຮງຮຽນ ສະຖາບັນ ບຸນເກີດສຶກສາ BIS </p>
               </div>
               <div class="col-md-4 text-center mb-4 p-3">
                  <div class="container-fluid p-4">
                     <i class="fab fa-facebook fa-2x "></i>
                  </div>
                  <div>
                     <a href="index.php" class="fab fa-facebook-messenger fa-2x">facebook</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
  </footer>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>