<?php include_once '../models/barang.php';
$user = new Barang(); 
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body >

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h2 class="text-center mb-4"><i class="fas fa-user-plus"></i> Edit Data</h2>
            <form action="../controllers/c_user.php?aksi=update" method="post">
            <?php foreach ($user->tampil_data_byid($_GET['id']) as $data) {
                ?>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" id="id_user" name="id_user" value="<?= $data->id_user ?>" hidden>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama lengkap" required value="<?= $data->nama ?>">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan email" required  value="<?= $data->email ?>">
                </div>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required  value="<?= $data->username ?>">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required  value="<?= $data->password ?>">
                </div>
                <button type="submit" name="tambah" class="btn btn-primary btn-block">Daftar</button>
                <?php } ?>
            </form>
            <p class="text-center mt-3">Sudah punya akun? <a href="#">Masuk di sini</a></p>
        </div>
    </div>
</div>


</body>
</html>