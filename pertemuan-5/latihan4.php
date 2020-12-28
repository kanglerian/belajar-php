<?php
$mahasiswa = [
    [
        "Lerian Febriana",
        "1234567",
        "Teknik Informatika",
        "kanglerian@gmail.com"
    ],
    [
        "Naimatus Syadiah",
        "1234567",
        "Teknik Akuntansi",
        "syadiahnaimatus@gmail.com"
    ],
    [
        "Rayhan Novaldi",
        "1234567",
        "Teknik Bisnis",
        "rayhannovaldi@gmail.com"
    ]
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

    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama: <?= $mhs[0]; ?></li>
        <li>Nomor: <?= $mhs[1]; ?></li>
        <li>Jurusan: <?= $mhs[2]; ?></li>
        <li>Email: <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>

</html>