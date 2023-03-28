<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="https://lms.smkmerdekabdg.sch.id/assets/images/logo_sekolah.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="javascript" href="css/bootstrap.css" />
</head>
<body style="background-image: url('https://cdn-sekolah.annibuku.com/20219162/6.jpg'); 
background-size: 1500px; ">
    <body id="particles-js"></body>
<div class="animated bounceInDown">
  <div class="container">
    <span class="error animated tada" id="msg"></span>
    <form action="logincontrollersiswa.php" class="box" method="POST">
      <h4>Petugas<span>MerdekaSPP</span></h4>
      <h5>Log In Ke Akun Anda.</h5>
        <input type="text" name="nama" placeholder="Nama" autocomplete="off">
        <i class="typcn typcn-eye"></i>
        <input type="password" name="nis" placeholder="Password" autocomplete="off">
        

        <input type="submit" value="Sign in" class="btn1">
      </form>
      <h3 style="color:#ff0000">Nama atau Password Salah</h3>
  </div> 
       <div class="footer">
      <span>Made with <i class="fa fa-heart pulse"></i> <a>By Fauzan Maulana M</a></span>
    </div>
</div>
</body>
</html>