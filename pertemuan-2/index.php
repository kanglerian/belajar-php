<!-- Pertemuan 2 PHP Dasar | Sintax dasar PHP -->

<!-- Standar Output -->
<?php
/*
1. Standar Output
a. echo, print (menampilkan)
b. var_dump (menampilkan untuk debagging, mencari nilai dari variabel)
c. print_r (menampilkan tapi pakai kurung)
*/

// echo "Lerian Febriana";
// echo 123;
// echo true;
// var_dump("Lerian Febriana");


// Penulisan sintaks PHP
// 1. PHP dalam HTML

// 2. HTML dalam PHP

// Variabel dan Tipe Data
// Variabel
// Tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Lerian";

// echo "Hallo, nama saya $nama";


// Operator Aritmatika
// + - / *
// $x = 10;
// $y = 20;

// echo $x * $y;
// echo 1 + 1;


// Penggabung string
// .
// $nama_depan = "Lerian";
// $nama_belakang = "Febriana";

// echo $nama_depan . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=

// $x = 1;
// $x += 5;
// echo $x;

// Perbandingan
// <, >, <=, >=, ==, !=

// var_dump(1 < 5);

// Identitas
// ===, !==

// var_dump(1 === "1");


// Logika
// &&, ||, !
// $x = 10;
// var_dump($x < 20 && $x % 2 == 0);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <h1>Halo, selamat datang <?php echo $nama; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>
</body>

</html>