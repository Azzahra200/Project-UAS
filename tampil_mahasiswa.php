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
        <div class="card-header text-success">
            <center><h1><b>TAMPIL MAHASISWA BARU</b></h1></center>
        </div>
        <table class="table table-hover table-striped text-success">
           <thead>
              <tr>
                <th>NO</th>
                <th>NAMA</th>
                <th>TANGGAL LAHIR</th>
                <th>JENIS KELAMIN</th>
                <th>AGAMA</th>
                <th>ALAMAT</th>
                <th>NOMOR HP</th>
                <th>E-MAIL</th>
                <th>SEKOLAH ASAL</th>
                <th>USERNAME</th>
                <th>JURUSAN</th>
                <th>AKSI</th>
              </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_mahasiswa=mysqli_query($conn,"select * from calon_mahasiswa join ambil_jurusan on ambil_jurusan.id_jurusan=calon_mahasiswa.id_jurusan");
                $no=0;

                while($dt_mahasiswa=mysqli_fetch_array($qry_mahasiswa)){
                    $no++;?>
                       <tr>
                          <td><?=$no?></td> <td><?=$dt_mahasiswa['nama']?></td> <td><?=$dt_mahasiswa['tanggal_lahir']?></td> <td><?=$dt_mahasiswa['jenis_kelamin']?></td> <td><?=$dt_mahasiswa['agama']?></td> <td><?=$dt_mahasiswa['alamat']?> <td><?=$dt_mahasiswa['nomor_hp']?></td> <td><?=$dt_mahasiswa['email']?></td> <td><?=$dt_mahasiswa['sekolah_asal']?></td> <td><?=$dt_mahasiswa['username']?></td> <td><?=$dt_mahasiswa['nama_jurusan']?></td> 
                        
                          <td><a href="ubah_mahasiswa.php?id_mahasiswa=<?=$dt_mahasiswa['id_mahasiswa']?>" class="btn btn-success">UBAH</a> | <a href="hapus_mahasiswa.php?id_mahasiswa=<?=$dt_mahasiswa['id_mahasiswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">HAPUS</a></td>
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