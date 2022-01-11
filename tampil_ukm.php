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
    <div class="card text-center">
        <div class="card-header text-danger">
            <center><h1><b>TAMPIL DATA UKM</b></h1></center>
        </div>
       <table class="table table-hover table-spriped text-danger">
    	            <thead>
    		          <tr>
		    			<th>NO</th><th>NAMA UKM</th>
		    			<th>AKSI</th>
    		          </tr>
    	            </thead>
    	            <tbody>
	    		        <?php
				        include "koneksi.php";
				    	$qry_ukm=mysqli_query($conn,"select * from data_ukm");
				    	$no=0;
				    	while($nama_ukm=mysqli_fetch_array($qry_ukm)){
				    	$no++;?>
				    	<tr>
	    	    	       <td><?=$no?></td><td><?=$nama_ukm['nama_ukm']?></td>

	    	    	       <td><a href="hapus_ukm.php?nama_ukm=<?=$nama_ukm['nama_ukm']?>" onclick="return cofirm('Apakah anda yakin menghapus data ini?')" class="btn btn-warning">HAPUS</a></td>
	    	            </tr>
			    	    <?php
			    		}
			    		?>
    	            </tbody>
                </table>
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