<?php include 'config/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Aplikasi CRUD Mahasiswa</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f4f7f6; margin: 40px; }
        .container { background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h2 { color: #333; }
        
        /* Styling Tabel */
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background-color: #007bff; color: white; }
        tr:hover { background-color: #f1f1f1; }
        
        /* Tombol & Foto */
        .btn { padding: 8px 12px; text-decoration: none; border-radius: 4px; font-size: 14px; color: white; }
        .btn-tambah { background-color: #28a745; margin-bottom: 20px; display: inline-block; }
        .btn-edit { background-color: #ffc107; color: #333; }
        .btn-hapus { background-color: #dc3545; }
        
        img { border-radius: 50%; object-fit: cover; border: 2px solid #ddd; }
    </style>
</head>
<body>

<div class="container">
    <h2>Daftar Mahasiswa</h2>
    <a href="tambah.php" class="btn btn-tambah">+ Tambah Mahasiswa</a>

    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Jurusan</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysqli_query($conn, "SELECT * FROM mahasiswa");
            while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $data['nim']; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['jurusan']; ?></td>
                <td>
                    <img src="uploads/<?php echo $data['foto']; ?>" width="50" height="50">
                </td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-edit">Edit</a>
                    <a href="hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-hapus" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>