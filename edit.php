<?php
    require 'functions.php';
    //cek apakah button submit sudah di tekan atau belum
    if(isset($_POST['submit']))
    {

        //cek sukses data dirubah menggunakan function edit pada function.php
        if(edit($_POST)>0)
        {
            echo "
            <script>
                alert('data berhasil diperbaharui');
                document.location.href='index.php';
            </script>
            
            ";
        } else{
            echo "
            <script>
                alert('data gagal diperbahaui');
                document.location.href='edit.php';
            </script>";
            echo "<br>";
            echo mysql_error($conn);
        }
    }
    // menggunakan method get untuk mengambil id yg telah terseleksi oleh user dan dimasukkan
    // ke dalam variabel baru yaitu $id
    $id=$_GET[id];
    // var_dump($id);

    // query berdasarkan id
    $mhs=query("SELECT * FROM mahasiswa WHERE id=$id")[0];
    // var_dump($mhs[0]["Nama"]);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data</title>
</head>
<body>
    <h1>Update Data Mahasiswa</h1>
    <form action="" method="post">
        <li>
            <input type="hidden" name="id" value="<?= $mhs[id] ?>">
        </li>

        <ul>
            <li>
                <!-- for pada tabel terhubung id jika label nama diklik maka textfield nama akan aktif juga -->
                <label for="Nama">Nama :</label>
                <!-- untuk pengisian name besar kecilnya harus sesuai dengan fieldnya -->
                <input type="text" name="Nama" id="Nama" value="<?= $mhs[Nama]; ?>" >
            </li>
            <li>
                <label for="Nim">Nim :</label>
                <input type="text" name="Nim" id="Nim" required value="<?= $mhs[Nim]; ?>">
            </li>
            <li>
                <label for="Nim">Email :</label>
                <input type="text" name="Email" id="Email" required value="<?= $mhs[Email]; ?>">
            </li>
            <li>
                <label for="Nim">Jurusan :</label>
                <input type="text" name="Jurusan" id="Jurusan" required value="<?= $mhs[Jurusan]; ?>">
            </li>
            <li>
                <label for="Gambar">Gambar :</label>
                <input type="text" name="Gambar" id="Gambar" required value="<?= $mhs[Gambar]; ?>">
            </li>
            <li>
                <button type="submit" name="submit"> Update </button>
            </li>
        </ul>
    </form>
</body>
</html>