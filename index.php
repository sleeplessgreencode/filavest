<?php
// import file konfigurasi dasar
include_once("konfigurasi/konfigurasi.ink.php");
// import file fungsiPHP
include_once("fungsi/fungDB.ink.php");
// import struktur kepala dan kaki html
include_once("inklusi/html.inc.php");

echo $kepala;
/*------------------------------ Konten -------------------------------*/
?>
<div class="container-fluid blok-utama">
    <div class="row-fluid">
        <div class="span12">
                <h1>Selamat datang di Filavest</h1>
                <p>Filavest adalah sebuah platform investasi berbasis kedermawanan yang bertujuan untuk memajukan UKM dengan misi sosial di Indonesia berbasiskan pendanaan <a data-toggle="tooltip" data-placement="top" title="Crowdfunding adalah metode pendanaan yang sangat masif dan melibatkan keikutsertaan berbagai lapisan masyarakat" disabled>crowdfunding</a> dimana masyarakat dapat berpartisipasi dan ikut serta dalam memajukan UKM Indonesia</p>
                <!--<p>
                <a class="btn btn-primary btn-large" href="#">
                    Pelajari selengkapnya
                </a>
                </p>-->
        </div>
    </div>
</div>
<div class="container-fluid blok1">
    <h2>Produk Kami</h2>
</div>
<div class="container-fluid blok2">
    <h2>UKM Tersedia</h2>
</div>
<div class="container-fluid blok3">
    <h2>Data & Statistik</h2>
</div>
<div class="container-fluid blok4">
    <h2>Artikel Terbaru</h2>
</div>
                    <!--<div class="navbar navbar-fixed-bottom">
                        <div class="navbar-inner">
                            <p class="navbar-text" style="text-align: center;">Copyright 2016. Design by <a href=\"https://id.linkedin.com/in/johanespao">jPao</a></p>
                        </div>
                    </div>-->
<?php
/*---------------------------------------------------------------------*/
// Google Analytics Script
include_once("inklusi/googleAnalyticsScript.inc.php");
echo $kaki;
?>