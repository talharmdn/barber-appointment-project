<?php 
   session_start(); 
   
   require('_mysqlbaglan.php'); 
    
   
   if (isset($_POST['username']) and isset($_POST['password'])){ 
   
   extract($_POST); 
   
    
   
   // sifre metni SHA256 ile şifreleniyor. 
   
   $password = hash('sha256', $password); 
   
   $sql = "SELECT * FROM `kullanicilar` WHERE "; 
   
   $sql= $sql . "kullaniciadi='$username' and sifre='$password'"; 
   
    
   
   $cevap = mysqli_query($baglanti, $sql); 
   
   //eger cevap FALSE ise hata yazdiriyoruz.       
   
   if(!$cevap ){ 
   
       echo '<br>Hata:' . mysqli_error($baglanti); 
   
   } 
   
   //veritabanindan dönen satır sayısını bul 
   
   $say = mysqli_num_rows($cevap); 
   
   if ($say == 1){ 
   
       $_SESSION['username'] = $username; 
   
    }else{ 
   
   $mesaj = "<h4> Hatalı Kullanıcı adı veya Şifre!</h4>"; 
   
    } 
   
   } 
   
   if (isset($_SESSION['username'])){ 
   
   header("Location: _uyesayfasi.php"); 
   
   }else{ 
   
   //oturum yok ise login formu görüntüle 
   
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
            <a class="btn btn-danger" href="_login.php">Giriş Yap</a>
            <a class="btn btn-primary text-light" href="_register.php">Kayıt Ol</a>
            </li>
         </ul>
      </div>
      </nav>
      <!-- navbar bitişi --> 
      <!-- giriş menü başlangıcı -->
         <div class="card bg-light">
            <article class="card-body mx-auto" style="max-width: 400px;">
               <h4 class="card-title mt-3 text-center">Giriş Yap</h4>
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
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                     </div>
                     <input name="password" class="form-control" placeholder="Şifre" type="password">
                  </div> 
                  <!-- form-group// -->
                  <div class="form-group">
                     <input type="submit" class="btn btn-danger btn-block" value="Giriş Yap"/>
                  </div> <!-- form-group// -->      
                  <p class="text-center">Hesabın yoksa <a href="_register.php">kayıt ol</a> </p>                                                                 
               </form>
               <?php 
                  if (isset($mesaj)) echo $mesaj; 
               ?> 
            </article>
         </div>
         <!-- giriş menü bitişi -->
         <!-- alt bölüm başlangıcı -->
         <div class="well well-sm card bg-dark text-light">
         <p align="center">Talha Ramadan 
         <br> Tüm Hakları Saklıdır. Copyright &copy 2022</p>
         </div>
         <!-- alt bölüm bitişi -->
      </div> 
   </body>
</html>
<?php } ?>