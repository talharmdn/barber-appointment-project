<?php 
   require ('_mysqlbaglan.php'); 
   
   if (isset($_POST['username']) && isset($_POST['password'])){ 
   
    extract($_POST); 
   
    // sifre metni SHA256 ile şifreleniyor. 
   
    $password = hash('sha256', $password); 
   
        
   
    $sql="INSERT INTO `kullanicilar` (kullaniciadi, sifre, eposta)"; 
   
    $sql = $sql . "VALUES ('$username', '$password', '$email')"; 
   
        
   
       $cevap = mysqli_query($baglanti, $sql); 
   
       if ($cevap){ 
   
           $mesaj = "<h4>Kullanıcı oluşturuldu.</h4>"; 
   
       }else{ 
   
           $mesaj = "<h4>Kullanıcı oluşturulamadı!</h4>"; 
   
       } 
   
   } 
   
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
         </ul>
         <ul class="nav nav-pills ml-auto">
            <li class="nav-item">
            <a class="btn btn-primary text-light" href="_login.php">Giriş Yap</a>
            <a class="btn btn-danger" href="_register.php">Kayıt Ol</a>
            </li>
         </ul>
      </div>
      </nav>
      <!-- navbar bitişi --> 
      <!-- kayıt menü başlangıcı -->
         <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
               <h4 class="card-title mt-3 text-center">Hesap Oluştur</h4>
               <form action="<?php $_PHP_SELF ?>" method="POST">
                  <!-- form-group// -->
                  <div class="form-group input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                     <input name="username" class="form-control" placeholder="Kullanıcı adı" type="text">
                  </div> 
                  <!-- form-group// -->
                  <div class="form-group input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                     </div>
                     <input name="email" class="form-control" placeholder="E-posta" type="email">
                  </div> 
                  <!-- form-group// -->
                  <div class="form-group input-group">
                     <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                     </div>
                     <input name="password" class="form-control" placeholder="Şifre" type="password">
                  </div> 
                  <!-- form-group// -->
                  <div class="form-group">
                     <input type="submit" class="btn btn-danger btn-block" value="Kayıt Ol"/>
                  </div> <!-- form-group// -->      
                  <p class="text-center">Hesabın varsa <a href="_login.php">giriş yap</a> </p>                                                                 
               </form>
               <?php 
                  if (isset($mesaj)) echo $mesaj; 
               ?> 
            </article>
         </div>
         <!-- kayıt menü bitişi -->
         <!-- alt bölüm başlangıcı -->
         <div class="well well-sm card bg-dark text-light">
         <p align="center">Talha Ramadan 
         <br> Tüm Hakları Saklıdır. Copyright &copy 2022</p>
         </div>
         <!-- alt bölüm bitişi -->
      </div> 
   </body>
</html>