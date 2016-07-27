<?php
/*
 * File ini menyimpan semua fungsi PHP yang akan rutin digunakan di situs.
 * Dilarang keras merubah konten apapun dari file ini, terutam jika anda
 * tidak memahami PHP & MySQL.
 */

function koneksiDB($serverDB,$userDB,$passDB,$dbDB){
    global $koneksi;
    
    $koneksi = new mysqli($serverDB,$userDB,$passDB,$dbDB);
    
    if ($koneksi->connect_error){
        die("Koneksi gagal: " . $koneksi->connect_error);
    }
    
    return $koneksi;
}
?>