<?php
// import file sesi
include_once("fungsi/sesi.ink.php");
// import file konfigurasi dasar
include_once("konfigurasi/konfigurasi.ink.php");
// import file fungsiDBPHP
include_once("fungsi/fungDB.ink.php");
// import file fungsiPHP
include_once("fungsi/fung.ink.php");
// import struktur kepala dan kaki html
include_once("inklusi/html.inc.php");

$tampilanHalaman = "halamanMuka";

echo $kepala;
/*------------------------------ Konten -------------------------------*/
// GUNAKAN SWITCH CASE DISINI !!
if(array_key_exists('modeHalaman', $_GET)) {
    $tampilanHalaman = $_GET['modeHalaman'];
}

switch($tampilanHalaman) {
    case 'daftar':
        $namaDepan = $namaBelakang = $namaPengguna = $kataKunci = $konfirmasiKataKunci = "";
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $namaDepan = pembersihFormulir($_POST["namaDepan"]);
            $namaBelakang = pembersihFormulir($_POST["namaBelakang"]);
            $namaPengguna = pembersihFormulir($_POST["namaPengguna"]);
            $kataKunci = pembersihFormulir($_POST["kataKunci"]);
            $konfirmasiKataKunci = pembersihFormulir($_POST["konfirmasiKataKunci"]);
        }
        echo $namaDepan;
        echo $namaBelakang;
        echo $namaPengguna;
        echo $kataKunci;
        echo $konfirmasiKataKunci;
        echo $halamanDaftar;
        break;
    default:
        echo $halamanMuka;
}
/*---------------------------------------------------------------------*/
// Google Analytics Script
include_once("inklusi/googleAnalyticsScript.inc.php");
echo $kaki;
?>