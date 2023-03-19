<?php
// siapkan 2 angka awal
$angka_sebelumnya=0;
$angka_sekarang=1;

for ($i=0; $i<=20; $i++)
{
  // hitung angka yang akan ditampilkan
  $output = $angka_sekarang + $angka_sebelumnya;
  echo " $output";
  
  //siapkan angka untuk perhitungan berikutnya
  $angka_sebelumnya = $angka_sekarang;
  $angka_sekarang = $output;
}

?>