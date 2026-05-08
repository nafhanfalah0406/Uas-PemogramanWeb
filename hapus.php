<?php
include 'config/koneksi.php';

$id = $_GET['id'];

// (Opsional) Hapus file foto dari folder uploads agar tidak menumpuk
$data = mysqli_query($conn, "SELECT foto FROM mahasiswa WHERE id='$id'");
$mhs = mysqli_fetch_array($data);
unlink("uploads/".$mhs['foto']); 

// Hapus data dari database
mysqli_query($conn, "DELETE FROM mahasiswa WHERE id='$id'");

header("location:index.php");
?>