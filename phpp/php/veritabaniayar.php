<?php

$VT_sunucu = "localhost";
$VT_ismi = "coffeshop";


try {
    $VT_baglan = new PDO("mysql:host={$VT_sunucu};dbname={$VT_ismi};charset=utf8", 'root', '');
    $VT_baglan->query('USE coffeshop;');
    $VT_baglan->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>