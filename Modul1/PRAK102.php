<?php
$panjang = 8.9;
$lebar = 14.7;
$tinggi = 5.4;
$sisi = 7.9;

$luas_alas = $panjang * $lebar;
$volume = (1/3) * $luas_alas * $tinggi;

echo number_format($volume, 3, '.', '') . " m3";
?>
