<?php
if($_POST){
	$nama_ukm=$_POST['nama_ukm'];
	if(empty($nama_ukm)){
		echo "<script>alert('Nama UKM tidak boleh kosong');location.href='tambah_ukm.php';</script>";

	} else {
		include "koneksi.php";
		$insert=mysqli_query($conn,"insert into data_ukm (nama_ukm) value ('".$nama_ukm."')");
		if($insert){
			echo "<script>alert('Sukses menambahkan UKM');location.href='tampil_ukm.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan UKM');location.href='tambah_ukm.php';</script>";
		}
	}
}
?>