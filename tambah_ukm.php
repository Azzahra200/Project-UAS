<?php 
    include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>
    <div class="card text" style="margin-top: 150px">
        <div class="card-header text-danger">
           <center><h1><b>TAMBAH UKM</b></h1></center>
        </div>
        <form action="proses_tambah_ukm.php" method="post" class="text-danger">
    	<b>Nama UKM :</b>
    	<input type="text" name="nama_ukm" value="" class="form-control"><br>
    	<center><input type="submit" name="simpan" value="SIMPAN UKM" class="btn btn-primary"></center>
        </form><br>
        <div class="card-footer text-muted">
            <center><i>TUGAS UAS PEMROGRAMAN INTERNET @Ainaini_Azzahra_20510008</i></center>
       </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>