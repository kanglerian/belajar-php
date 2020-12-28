<?php
//date y=untuk menampilkan tanggal dgn format tertentu
// echo date("l, d-M-Y");

// time
// echo time();
// detik dari 1 januari 1970
// echo date("l, d M Y", time() + 60 * 60 * 24 * 100);

//mktime membuat sendiri detik
//mktime (0,0,0,0,0,0,0
//jam, menit, detik, bulan,tanggal,tahun)
// echo date("l", mktime(0, 0, 0, 4, 12, 1998));

//strtotime
echo strtotime("26 Feb 1998");