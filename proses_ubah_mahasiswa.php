<?php 
if($_POST){
	$id_mahasiswa=$_POST['id_mahasiswa'];
	$nama=$_POST['nama'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$agama=$_POST['agama'];
	$alamat=$_POST['alamat'];
	$nomor_hp=$_POST['nomor_hp'];
	$email=$_POST['email'];
	$sekolah_asal=$_POST['sekolah_asal'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$id_jurusan=$_POST['id_jurusan'];
	if(empty($nama)){
		echo "<script>alert('nama tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";

	} elseif(empty($username)){
		echo "<script>alert('username tidak boleh kosong');location.href='tambah_mahasiswa.php';</script>";
	} else {
		include "koneksi.php";
		if(empty($password)){
			$update=mysqli_query($conn,"update calon_mahasiswa set nama='".$nama."', tanggal_lahir='".$tanggal_lahir."', jenis_kelamin='".$jenis_kelamin."', agama='".$agama."', alamat='".$alamat."', nomor_hp='".$nomor_hp."', email='".$email."', sekolah_asal='".$sekolah_asal."', username='".$username."', id_jurusan='".$id_jurusan."' ") or die (mysqli_error($conn));
			if($update){
				echo "<script>alert('Sukses update data');location.href='tampil_mahasiswa.php';</script>";
			} else {
				echo "<script>alert('Gagal update data');location.href='ubah_mahasiswa.php?id_mhs=".$id_mhs."';</script>";
			}
		} else {
			$update=mysqli_query($conn,"update calon_mahasiswa set nama='".$nama."', tanggal_lahir='".$tanggal_lahir."', jenis_kelamin='".$jenis_kelamin."', agama='".$agama."', alamat='".$alamat."', nomor_hp='".$nomor_hp."', email='".$email."', sekolah_asal='".$sekolah_asal."', username='".$username."', id_jurusan='".$id_jurusan."' where id_mahasiswa='".$id_mahasiswa."' ") or die (mysqli_error($conn));
			if($update){
				echo "<script>alert('Sukses update data');location.href='tampil_mahasiswa.php';</script>";
			} else {
				echo "<script>alert('Gagal update data');location.href='ubah_mahasiswa.php?id_mahasiswa=".$id_mahasiswa."';</script>";
			}
		}
	}
}
?>