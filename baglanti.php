<?php

$vt_sunucu = "localhost"; // Sunucu adı
$vt_kullanici = "root"; // Veritabanı kullanıcı adı
$vt_sifre = ""; // Veritabanı şifresi
$vt_adi = "devranhoca"; // Veritabanı adı

// MySQL bağlantısı
$baglan = mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);

// Bağlantı kontrolü
if (!$baglan) {
    die("Veritabanı bağlantı işlemi başarısız oldu: " . mysqli_connect_error());
} 

?>
