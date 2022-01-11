<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title></title>
</head>
<body>
    <div class="card text">
        <div class="card-header text-info">
           <center><h1><b>FORM JURUSAN</b></h1></center>
        </div>
        <form action="proses_tambah_jurusan.php" method="post" class="text-info">
    	<b>Nama Jurusan :</b>
    	<input type="text" name="nama_jurusan" value="" class="form-control">
    	<b>Angkatan :</b>
    	<input type="text" name="angkatan" value="" class="form-control"><br>
    	<center><input type="submit" name="simpan" value="SIMPAN JURUSAN" class="btn btn-primary"></center>
        </form><br>
        <div class="card-footer text-muted">
           <center><i>TUGAS UAS PEMROGRAMAN INTERNET @Ainaini_Azzahra_20510008</i></center>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>