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
  <div class="">
      <div class="card-header text-success">
        <center><h1><b>FORM PENDAFTARAN MAHASISWA BARU</b></h1></center>
      </div>
      <form action="proses_tambah_mahasiswa.php" method="post" class="text-success">
       <b>Nama Mahasiswa :</b>
       <input type="text" name="nama" value="" class="form-control">
       <b>Tanggal Lahir :</b>
       <input type="date" name="tanggal_lahir" value="" class="form-control">
       <b>Jenis Kelamin :</b>
       <select name="jenis_kelamin" class="form-control">
           <option></option>
           <option value="L">Laki-Laki</option>
           <option value="P">Perempuan</option>
       </select> 
       <b>Agama :</b>
       <select name="agama" class="form-control">
           <option></option>
           <option value="Islam">Islam</option>
           <option value="Kristen">Kristen</option>
           <option value="Hindhu">Hindhu</option>
           <option value="Budha">Budha</option>
           <option value="Atheis">Atheis</option>
       </select> 
       <b>Alamat :</b>
       <textarea name="alamat" class="form-control" rows="3"></textarea>
       <b>Nomor HP :</b>
       <input type="text" name="nomor_hp" value="" class="form-control">
       <b>E-Mail :</b>
       <input type="text" name="email" value="" class="form-control">
       <b>Sekolah Asal :</b>
       <input type="text" name="sekolah_asal" value="" class="form-control">
       <b>Username :</b>
       <input type="text" name="username" value="" class="form-control">
       <b>Password :</b>
       <input type="password" name="password" value="" class="form-control">
       <b>Jurusan :</b>
       <select name="id_jurusan" class="form-control">
           <option></option>
           <?php
           include "koneksi.php";
           $qry_jurusan=mysqli_query($conn,"select * from ambil_jurusan");
           while($data_jurusan=mysqli_fetch_array($qry_jurusan)){
            echo '<option value="'.$data_jurusan['id_jurusan'].'">'.$data_jurusan['nama_jurusan'].'</option>';
           }
           ?>
       </select><br>
       <center><input type="submit" name="simpan" value="TAMBAH DATA MAHASISWA" class="btn btn-primary"></center>
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