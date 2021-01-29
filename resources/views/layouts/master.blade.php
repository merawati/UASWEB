<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 <!-- Carousel -->
    <title>SMAN 1 CIBADAK</title>
  </head>
  <body>
    <div class="header">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/images/background.png" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
        <img src="assets/images/logo.png">
        <div class="text">
        <h5><b>SMAN 1 CIBADAK</b></h5>
        <p>Vidya Dharma Anoraga</p>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/perintis.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">

      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/images/radio.png" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">

      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>

<!-- NAV -->
<div class="container">
  <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link " aria-current="page" href="#">BERANDA</a>
  </li>
  <li class="nav-item">
  <a class="nav-link " aria-current="page" href="#">PROFIL</a>
   </li>
   <li class="nav-item">
    <a class="nav-link " aria-current="page" href="#">JURNAL</a>
    </li>
    <li class="nav-item">
    <a class="nav-link " aria-current="page" href="#">PPDB</a>
    </li>
    <li class="nav-item">
    <a class="nav-link " aria-current="page" href="#">CBT</a>
    </li>
    <li class="nav-item">
    <a class="nav-link " aria-current="page" href="#">EXAM</a>
    </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="login" role="button" aria-expanded="false">POS</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="login">Login Admin</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">MEDIA</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">ARSIP</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Lorem Ipsum</a></li>
      <li><a class="dropdown-item" href="#">Lorem Ipsum</a></li>
      <li><a class="dropdown-item" href="#">Lorem Ipsum</a></li>
    </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">PRESTASI</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">KONTAK</a>
  </li>
    </div>
</div>

@yield('content')


</section>
<footer>
       <div class="container">
           <div class="section">
               <div class="section-title" style="margin-bottom: 24px;">
                   <i data-feather="send" height="16px" width="16px" style="margin-right: 8px"></i>

                   Info Kontak
               </div>

               <div class="address">
                   <i data-feather="map-pin" height="24px" width="24px" style="margin-right: 8px"></i>

                   <p style="margin-bottom: 24px;"> Jl. Perintis Kemerdekaan No.72, Cibadak, Sukabumi, Jawa Barat 43351</p>
               </div>

               <div class="address">
                   <i data-feather="phone-call" height="16px" width="16px" style="margin-right: 8px"></i>

                   <p>0266-531001</p>
               </div>
           </div>
           <div class="section">
               <div class="section-title">
                   <i data-feather="folder" height="16px" width="16px" style="margin-right: 8px"></i>

                   Arsip Pos
               </div>

               <ul>
                   <li><a href="#" style="display: flex; align-items: center; text-decoration: none; color: white; margin: 8px 0px; font-size: 14px;"><i data-feather="chevron-right" height="16px" width="16px" style="margin-right: 8px"></i>Desember 2020 (1)</a></li>
                   <li><a href="#" style="display: flex; align-items: center; text-decoration: none; color: white; margin: 8px 0px; font-size: 14px;"><i data-feather="chevron-right" height="16px" width="16px" style="margin-right: 8px"></i>Desember 2020 (1)</a></li>
                   <li><a href="#" style="display: flex; align-items: center; text-decoration: none; color: white; margin: 8px 0px; font-size: 14px;"><i data-feather="chevron-right" height="16px" width="16px" style="margin-right: 8px"></i>Desember 2020 (1)</a></li>
                   <li><a href="#" style="display: flex; align-items: center; text-decoration: none; color: white; margin: 8px 0px; font-size: 14px;"><i data-feather="chevron-right" height="16px" width="16px" style="margin-right: 8px"></i>Desember 2020 (1)</a></li>
               </ul>
           </div>
           <div class="section">
               <div class="section-title">
                   <i data-feather="external-link" height="16px" width="16px" style="margin-right: 8px"></i>

                   Tautan
               </div>

               <ul>
                   <li><a href="#" style="display: flex; align-items: center; text-decoration: none; color: white; margin: 8px 0px; font-size: 14px;"><i data-feather="chevron-right" height="16px" width="16px" style="margin-right: 8px"></i>Bahasa Indonesia</a></li>
               </ul>
           </div>
       </div>

       <div style="text-align: center; font-size: 14px; padding: 18px 0px;">&copy; 2017 - Website Resmi SMAN 1 Cibadak</div>
   </footer>
   <!-- Optional JavaScript; choose one of the two! -->

   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

   <!-- Option 2: Separate Popper and Bootstrap JS -->
   <!--
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   -->
 </body>
</html>
