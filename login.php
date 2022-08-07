<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ແບບຟຣອມເຂົ້າສູ່ລະບົບ</title>
  <link rel="stylesheet" href="style-login.css">
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
    }
    body{
      height: 100vh;
      width: 100%;
      background-image: url("image/telework.jpg");
      background-size: cover;
      background-position: center;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .container{
      display: flex;
      align-items: center;
      flex-direction: column;
    }
    .container h1{ 
      color: black;
      font-weight: 600;
      text-transform: uppercase;

    }
    .container input[type="text"],.container input[type="password"]{
      border: 0;
      background: none;
      height: 50px;
      width: 600px;
      margin: 20px auto;
      border: 2px solid black;
      padding: 14px 10px;
      font-size: 1rem;
      outline: none;
      text-align: center;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
      color: black;
    }
    .container input[type="text"],.container input[type="password"]{
      color: black;
      background: rgba(154, 55, 235, 0.3);
      border: 2px solid rgba(19, 5, 5, 0.4);

    }
    .container input[type="text"]::placeholder,.container input[type="password"]::placeholder{
      color: black;
      font-weight: 700;
    }
    .container input[type="text"]:focus,.container input[type="password"]:focus{
      background: rgba(154, 55, 235, 0.3);
      width: 650px;
      color: black;
    }
    .container input[type="submit"]{
      border: 0;
      background: none;
      display: block;
      margin: 20px auto;
      text-align: center;
      border: 2px solid #020302a2;
      padding: 14px ;
      outline: none;
      border-radius: 24px;
      transition: 0.25s;
      cursor: pointer;
      color: black;
      font-weight: 700;
    }

    .container input[type="submit"]:hover{
      color:black;
      background:rgba(95, 39, 205,1.0);
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .fw-bold{
      font-size: 18px;
      color: black-dark;
      font-weight: bold;
    }
    .a btn-link{
      font-size: 14px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <form action="setEmail.php" class="container" method="POST">
  <i class="fa-solid fa-circle-user fa-10x mb-4"></i>
    <h1>ເຂົ້າສູ່ລະບົບ</h1>
    <input class="text" name="Email" type="text" placeholder="ປ້ອນຊື່ ຫຼື ອີເມວ" id="">
    <input class="text" name="Password" type="password" placeholder="ປ້ອນລະຫັດຜ່ານ" id="">
    <input  class="btn-submit" type="submit" name="login" value="ເຂົ້າສູລະບົບ">
    <p class="fw-bold"><a href="index.php" class="text-warning">ໜ້າຫຼັກ</a> ຫຼື ຄລິກທີ່ນີ້ລົງທະບຽນເພື່ອເຂົ້າສູ່ລະບົບ <a href="from.php" class="text-primary">ລົງທະບຽນ</a></p>
  </form>
  
</body>
</html>