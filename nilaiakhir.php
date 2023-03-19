<?php

$nama   = $_POST['nama'];
$matematika  = $_POST['matematika'];
$biologi  = $_POST['biologi'];
$fisika  = $_POST['fisika'];

//penjumlahan dari nilai-nilai yang sudah diinput

$nilai_akhir = ($matematika + $biologi + $fisika )/ 3;


echo"
<h1>Hitung Nilai AKhir Mahasiswa</h1>
Nama Mahasiswa : $nama <br>
Nilai matematika : <b>$matematika</b><br>
Nilai fisika : <b>$fisika</b><br>
Nilai biologi   : <b>$biologi</b><br>
<h4>Nilai Akhir : $nilai_akhir</h4>
";
//menampilkan grade berdasarkan hasil nilai akhir

if ($nilai_akhir>=60)
echo "$nama dinyatakan lulus";
else {
echo " $nama dinyatakan Tidak Lulus";
}
 