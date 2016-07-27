<?php
if(isset($_SESSION['username'])) {
    $modeSesi="Aktif";
    } else {
        $modeSesi="Pasif";
    }

// User Navigation
if($modeSesi=="Aktif") {
    $navigasiAnggota = "<li>Selamat datang, " . $_SESSION['nama_depan'] . "</li>";
    } else {
        $navigasiAnggota = "<li><a href=\"index.php?modeHalaman=daftar\"><i class=\"material-icons md-light\">vpn_key</i> Daftar</a></li>
                            <li><a href=\"#\"><i class=\"material-icons md-light\">face</i> Masuk</a></li>";
    }
?>