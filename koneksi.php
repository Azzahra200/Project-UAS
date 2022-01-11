<?php
$conn=mysqli_connect('localhost', 'root', '', 'pendaftaran_mahasiswa');
if(mysqli_connect_error()) {
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}
?>