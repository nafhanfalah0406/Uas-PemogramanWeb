include 'config/koneksi.php';
<form action="proses_simpan.php" method="POST" enctype="multipart/form-data">
    NIM: <input type="text" name="nim" required><br>
    Nama: <input type="text" name="nama" required><br>
    Jurusan: <input type="text" name="jurusan" required><br>
    Foto: <input type="file" name="foto" required><br>
    <button type="submit">Simpan</button>
</form>