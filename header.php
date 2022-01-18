<?php
session_start();
  if($_SESSION['status_login']!=true){
    header('location: login.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title></title>
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light" style="box-shadow: 5px 5px 6px -5px;">
      <div class="container-fluid">
            <b><a class="navbar-brand text-secondary" href="#">PENDAFTARAN MAHASISWA</a></b>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="               #navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"               aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <b><div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="home.php">Home</a>

                        <a class="nav-link text-success" href="tampil_mahasiswa.php">Data Mahasiswa</a>

                        <a class="nav-link text-info" href="tampil_jurusan.php">Data Jurusan</a>

                        <a class="nav-link text-danger" href="tampil_ukm.php">Data UKM</a>

                        <a class="nav-link text-secondary" href="logout.php">Logout</a>

                 </div></b>
           </div>
      </div>
   </nav>
   <div class="container bg-light rounded" style="margin-top: 10px">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>