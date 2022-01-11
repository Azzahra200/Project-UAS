<?php
    if($_GET['nama_ukm']){
    	include "koneksi.php";
    	$sqr_hapus=mysqli_query($conn,"delete from data_ukm where nama_ukm='".$_GET['nama_ukm']."'");
    	if($sqr_hapus){
    		echo "<script>alert('Sukses hapus Jurusan');location.href='tampil_ukm.php';</script>";
    	} else {
    		echo "<script>alert('Gagal hapus Jurusan');location.href='tampil_ukm.php';</script>";
    	}
    }
?>