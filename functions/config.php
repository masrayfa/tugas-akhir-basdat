<?php
$db = pg_connect('host=localhost dbname= penitipan_hewan user=postgres password=fgh060802');
if(!$db) {
    die("Gagal terhubung ke database: ". pg_connect_error());
} else {
    echo "Terkoneksi ke database ";
}
?>