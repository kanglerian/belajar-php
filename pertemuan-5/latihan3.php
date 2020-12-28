<?php
$mahasiswa = [
    "Lerian Febriana",
    "1234567",
    "Teknik Informatika",
    "kanglerian@gmail.com"
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mahasiswa as $mhs) : ?>
        <li><?= $mhs; ?></li>
        <?php endforeach; ?>
        <br>
        <li>Nama : <?= $mahasiswa[0]; ?></li>
        <li>Nomor : <?= $mahasiswa[1]; ?></li>
        <li>Jurusan : <?= $mahasiswa[2]; ?></li>
        <li>Email : <?= $mahasiswa[3]; ?></li>
    </ul>
</body>

</html>