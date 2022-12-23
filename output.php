<?php
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenisk'];
    $tanggal = $_POST['tanggal'];
    $tempat = $_POST['tempat'];
    $jrs = $_POST['jrs'];
    $msk = $_POST['msk'];
    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>NIM = <?= $nim?></h1>
    <h1>Nama = <?= $nama?></h1>
    <h1>Jenis Kelamin = <?= $jk?></h1>
    <h1>Tanggal Lahir = <?= $tanggal?></h1>
    <h1>Tempat Lahir = <?= $tempat?></h1>
    <h1>Jurusan = <?= $jrs?></h1>
    <h1>Tahun Masuk = <?= $msk?></h1>

</body>
</html>