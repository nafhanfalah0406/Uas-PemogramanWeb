<?php
include 'config/koneksi.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];

// Mengelola Upload Foto
$foto = $_FILES['foto']['name'];
$tmp  = $_FILES['foto']['tmp_name'];
$path = "uploads/" . $foto;

if(move_uploaded_file($tmp, $path)){
    $query = "INSERT INTO mahasiswa (nim, nama, jurusan, foto) VALUES ('$nim', '$nama', '$jurusan', '$foto')";
    if(mysqli_query($conn, $query)){
        header("location:index.php"); // Kembali ke halaman utama jika berhasil
    }
}
?>