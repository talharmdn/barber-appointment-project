<?php
//oturumu başlat 
   
session_start(); 
error_reporting(0);

//eğer username adlı oturum değişkeni yok ise  

//login sayfasına yönlendir 

if ( !isset($_SESSION['username']) ) { 

  header("Location: _login.php"); 

  exit(); 

 }
 
//mysql baglanti kodunu ekliyoruz
include("_mysqlbaglan.php");

//sorguyu hazirliyoruz
$sql = "DELETE FROM randevular WHERE randevu_id=".$_GET['id'];

//sorguyu veritabanina gönderiyoruz.
$cevap = mysqli_query($baglanti,$sql);
//veritabani baglantisini kapatiyoruz.
mysqli_close($baglanti);
?>
<html>
    <head>
      <title>Saloon  Masculine</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <link rel="icon" type="image/x-icon" href="/images/favicon.png">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
   </head>
    <body>
    <div class="container">

<!-- navbar başlangıcı --> 
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   <div class="container-fluid">
   <ul class="nav nav-pills ">
      <li class="nav-item">
      <a class="btn text-light" href="index.php">Anasayfa</a>
      </li>
      <li class="nav-item">
         <a class="btn text-light" href="https://github.com/talharmdn/barber-appointment-project">Github</a>
      </li>
      <li class="nav-item">
      <a class="btn text-light" href="_randevu_olustur.php">Randevu Oluştur</a></li> 
      </li>
      <li class="nav-item">
      <a class="btn btn-danger" href="silmelistesi.php">Randevu Sil</a>
      </li>
      <li class="nav-item">
      <a class="btn text-light" href="guncellelistesi.php">Randevu Güncelle</a>
      </li>
      <li class="nav-item">
      <a class="btn text-light" href="listele.php">Randevuları Listele</a>
      </li>
   </ul>
   <ul class="nav nav-pills ml-auto">
      <li class="nav-item">
      <div class="dropdown">
         <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
         Merhaba <? echo $_SESSION['username']; ?>,
         </button>
         <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="text-secondary" href='_logout.php'> Oturumu Kapat</a>
         </div>
      </div>
      </li>
   </ul>
</div>
</nav>
<!-- navbar bitişi -->
<!-- anasayfa başlangıcı -->
<div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 900px;">
        <?php
            if(!$cevap )
            {
                echo '<br>Hata:' . mysqli_error($baglanti);
            }
            else
            {
                echo "<h4 align='center'>Kayıt başarıyla silindi!</h4>";
                echo " <p align='center'>Randevu listesine geri dönmek için<a href='listele.php'> tıklayınız</a></p>";
            }
         ?>
      </article>
   </div>
    <!-- anasayfa bitişi -->
    <!-- alt bölüm başlangıcı -->
    <div class="well well-sm card bg-dark text-light">
    <p align="center">Talha Ramadan 
    <br> Tüm Hakları Saklıdır. Copyright &copy 2022</p>
    </div>
    <!-- alt bölüm bitişi -->
    </div>
    </body>
</html>