<?php 
   //oturumu başlat 
   
   session_start(); 
   
   //eğer username adlı oturum değişkeni var ise  
   
   //üye sayfasına yönlendir 
   
   if ( isset($_SESSION['username']) ) { 
   
     header("Location: _uyesayfasi.php"); 
   
     exit(); 
   
    } 
   
   ?> 

<!DOCTYPE html>
<html>
<head>
  <title>Saloon  Masculine</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="/images/favicon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>
<!-- taşıyıcı başlangıcı -->
<div class="container">
  
<!-- navbar başlangıcı --> 
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
      <ul class="nav nav-pills ">
        <li class="nav-item">
          <a class="btn btn-danger" href="index.php">Anasayfa</a>
        </li>
        <li class="nav-item">
          <a class="btn text-light" href="https://github.com/talharmdn/barber-appointment-project">Github</a>
        </li>
      </ul>
      <ul class="nav nav-pills ml-auto">
        <li class="nav-item">
          <a class="btn btn-primary text-light" href="_login.php">Giriş Yap</a>
          <a class="btn btn-primary text-light" href="_register.php">Kayıt Ol</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- navbar bitişi --> 
  <!-- anasayfa başlangıcı -->
  <div class="jumbotron">
      <img src="images/barbers.jpg" class="img-circle" align="center">
    </div>
  <!-- anasayfa bitişi -->

  <!-- alt bölüm başlangıcı -->
  <div class="well well-sm card bg-dark text-light">
    <p align="center">Talha Ramadan 
    <br> Tüm Hakları Saklıdır. Copyright &copy 2022</p>
  </div>
  <!-- alt bölüm bitişi -->
 
<!-- taşıyıcı bitişi -->
</div>
 
</body>
</html>
