<?php
// Date
// Untuk menampilkan tanggal dengan forman tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
// echo Time();
//echo date ("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0,0,0,12,26,2002));


// strtotime
echo date("l", strtotime("26 Dec 2002"));



?> 