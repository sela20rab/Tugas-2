<?php
    $angka    =51;
    $hasil    =true;
    for($i=2;$i<$angka; $i++){
        if ($angka % $i == 0)
        $hasil    =false;
    }
    echo 'Angka <b>'.$angka.'</b>';
    echo $hasil ? 'termasuk bilangan prima' : ' bukan bilangan prima';
?>