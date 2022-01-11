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
    <div class="card text-center">
        <div class="card-header text-info">
         <center><h1><b>TAMPIL JURUSAN</b></h1></center>
        </div>
                <table class="table table-hover table-spriped text-info">
    	            <thead>
    		          <tr>
		    			<th>NO</th><th>JURUSAN</th><th>ANGKATAN</th>
		    			<th>AKSI</th>
    		          </tr>
    	            </thead>
    	            <tbody>
	    		        <?php
				        include "koneksi.php";
				    	$qry_jurusan=mysqli_query($conn,"select * from ambil_jurusan");
				    	$no=0;
				    	while($id_jurusan=mysqli_fetch_array($qry_jurusan)){
				    	$no++;?>
				    	<tr>
	    	    	       <td><?=$no?></td><td><?=$id_jurusan['nama_jurusan']?></td><td><?=$id_jurusan['angkatan']?></td>

	    	    	       <td><a href="hapus_jurusan.php?id_jurusan=<?=$id_jurusan['id_jurusan']?>" onclick="return cofirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">HAPUS</a></td>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
    include "footer.php";
?>
