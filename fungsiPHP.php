<?php
// import file konfigurasi dasar
include_once("konfigurasi/konfigurasi.ink.php");
// import file fungsiPHP
include_once("fungsi/fungDB.ink.php");

koneksiDB($database['server'],$database['username'],$database['password'],$database['database']);

// BAGIAN INI AKAN DIBUANG NANTI!!
if($koneksi){
    echo "Koneksi berhasil";
    echo $koneksi;
}
?>