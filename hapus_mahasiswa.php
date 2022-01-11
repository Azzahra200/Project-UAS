<?php
    if($_GET['id_mahasiswa']){
    	include "koneksi.php";
    	$sqr_hapus=mysqli_query($conn,"delete from calon_mahasiswa where id_mahasiswa='".$_GET['id_mahasiswa']."'");
    	if($sqr_hapus){
    		echo "<script>alert('Sukses hapus Jurusan');location.href='tampil_mahasiswa.php';</script>";
    	} else {
    		echo "<script>alert('Gagal hapus Jurusan');location.href='tampil_mahasiswa.php';</script>";
    	}
    }
?>