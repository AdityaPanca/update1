<?php
    require 'functions.php';
    // cek apakah button submit sudah di tekan atau belum

    if(isset($_POST['submit']))
    {
        // cek sukses data ditambah menggunakan function tambah pada function.php 
        if(tambah($_POST)>0)
        {
            echo "
            <script>
                alert('Data Berhasil Disimpan');
                document.location.href='index.php';
            </script>

            ";
        }else{
            echo "
            <script>
                alert('Data Gagal Disimpan');
                document.location.href='tambah_data.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Tambah Data</title>
</head>
<body>

    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
            <div class = "form-group">
                <label for="Nama">Nama</label>
                <input type="text" name="Nama" id="Nama" class="form-group" required>
            </li>
            <li>
                <label for="Nim">Nim</label>
                <input type="text" name="Nim" id="Nim" class="form-group" required>
            </li>
            <li>
                <label for="Email">Email</label>
                <input type="text" name="Email" id="Email" class="form-group" required>
            </li>
            <li>
                <label for="Jurusan">Jurusan</label>
                <input type="text" name="Jurusan" id="Jurusan" class="form-group" required>
            </li>
            <li>
                <label for="Gambar">Gambar</label>
                <input type="text" name="Gambar" id="Gambar" class="form-group" required>
            </li>
            <li>
            </div>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
    </form>
</body>
</html> 