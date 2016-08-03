<?php

$kepala = "<!DOCTYPE html>
            <html>
                <head>
                    <title>Filavest - A Philanthrophic Investment</title>
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
                    <!-- Bootstrap -->
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap.min.css\">
                    <!--<link rel=\"stylesheet\" type=\"text/css\" href=\"css/bootstrap-theme.min.css\">-->
                    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/icon?family=Material+Icons\">
                    <!-- CSS mod untuk override value CSS Bootstrap & Any CSS loaded before this -->
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/mod.css\">
                </head>
                <body>
                    <nav class=\"navbar navbar-default navbar-fixed-top\">
                        <div class=\"container-fluid navigasi\">
                        <div class=\"navbar-header\">
                            <!-- collapsing button menu -->
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsingNav\" aria-expanded=\"false\">
                                <span><i class=\"material-icons hijau\">dehaze</i></span>
                            </button>
                            
                            <a class=\"navbar-brand\" href=\"index.php\" style=\"margin-left: 0px;\">Filavest</a>
                        </div>
                            
                            <!-- collapse under 940px -->
                            <div class=\"collapse navbar-collapse\" id=\"collapsingNav\">
                                <ul class=\"nav navbar-nav\">
                                    <li><a href=\"#\">Berita</a></li>
                                    <li><a href=\"#\">Trending</a></li>
                                    <li><a href=\"#\">Filosofi</a></li>
                                    <li><a href=\"#\">Pasar Sekunder</a></li>
                                    <li><a href=\"#\">Tentang Kami</a></li>
                                </ul>
                                <ul class=\"nav navbar-nav navbar-right\">
                                    {$navigasiAnggota}
                                </ul>
                            </div>
                        </div>
                    </nav>";

$kaki =         "<div class=\"container-fluid blok-kaki\">
                    <center><i class=\"material-icons kaki\">copyright</i>2016 Filavest </br>Made with <i class=\"material-icons kaki merah\">favorite</i> by <a href=\"https://id.linkedin.com/in/johanespao\" style=\"color: #FFFFFF; font-weight=\"bold\">johanesPao</a></center>
                </div>
                <!-- Script jquery dan bootstrap -->
                <script src=\"js/jquery.js\"></script>
                <script src=\"js/jquery.validate.min.js\"></script>
                <script src=\"js/pendaftaran.js\"></script>
                <script src=\"js/bootstrap.min.js\"></script>
                <!-- Inisiasi javascript -->
                <script>
                    $(document).ready(function(){
                        $('[data-toggle=\"tooltip\"]').tooltip();
                    });
                </script>
              </body>
          </html>";
          
$halamanMuka = "<div class=\"container-fluid blok-utama\">
                    <div class=\"row-fluid\">
                        <div class=\"span12\">
                            <h1>Selamat datang di Filavest</h1>
                            <p>Filavest adalah sebuah platform investasi berbasis kedermawanan yang bertujuan untuk memajukan UKM dengan misi sosial di Indonesia berbasiskan pendanaan <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Crowdfunding adalah metode pendanaan yang sangat masif dan melibatkan keikutsertaan berbagai lapisan masyarakat\" disabled>crowdfunding</a> dimana masyarakat dapat berpartisipasi dan ikut serta dalam memajukan UKM Indonesia</p>
                        </div>
                    </div>
                </div>
            <div class=\"container-fluid blok1\">
                <h2>Produk Kami</h2>
            </div>
            <div class=\"container-fluid blok2\">
                <h2>UKM Tersedia</h2>
            </div>
            <div class=\"container-fluid blok3\">
                <h2>Data & Statistik</h2>
            </div>
            <div class=\"container-fluid blok4\">
                <h2>Artikel Terbaru</h2>
            </div>";
$halamanDaftar = "<div class=\"container-fluid blok-utama\">
                    <h1>Daftarkan diri anda</h1>
                        <form class=\"form-horizontal\" method=\"post\" action=\"index.php?modeHalaman=validasiDaftar\" role=\"form\" id=\"formulirPendaftaran\">
                            <div class=\"form-group col-lg-10\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span><i class=\"material-icons\">looks_one account_box</i></span>
                                    </div>
                                    <input type=\"text\" class=\"form-control\" id=\"namaDepan\" name=\"namaDepan\" placeholder=\"Nama Depan\">
                                </div>
                                <span class=\"help-block\" id=\"error\"></span>
                            </div>
                            <div class=\"form-group col-lg-10\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span><i class=\"material-icons\">looks_two account_box</i></span>
                                    </div>
                                    <input type=\"text\" class=\"form-control\" id=\"namaBelakang\" name=\"namaBelakang\" placeholder=\"Nama Belakang\">
                                </div>
                                <span class=\"help-block\" id=\"error\"></span>
                            </div>
                            <div class=\"form-group col-lg-10\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span><i class=\"material-icons\">face</i></span>
                                    </div>
                                    <input type=\"text\" class=\"form-control\" id=\"namaPengguna\" name=\"namaPengguna\" placeholder=\"Nama Pengguna (4 - 12 karakter)\">
                                </div>
                                <span class=\"help-block\" id=\"error\"></span>
                            </div>
                            <div class=\"form-group col-lg-10\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span><i class=\"material-icons\">email</i></span>
                                    </div>
                                    <input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"Email\">
                                </div>
                                <span class=\"help-block\" id=\"error\"></span>
                            </div>
                            <div class=\"form-group col-lg-10\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span><i class=\"material-icons\">lock</i></span>
                                    </div>
                                    <input type=\"password\" class=\"form-control\" id=\"kataKunci\" name=\"kataKunci\" placeholder=\"Kata Kunci (minimum 6 karakter)\">
                                </div>
                                <span class=\"help-block\" id=\"error\"></span>
                            </div>
                            <div class=\"form-group col-lg-10\">
                                <div class=\"input-group\">
                                    <div class=\"input-group-addon\">
                                        <span><i class=\"material-icons\">cached lock</i></span>
                                    </div>
                                    <input type=\"password\" class=\"form-control\" id=\"konfirmasiKataKunci\" name=\"konfirmasiKataKunci\" placeholder=\"Tulis Ulang Kata Kunci\">
                                </div>
                                <span class=\"help-block\" id=\"error\"></span>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-lg-10\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Daftar</button>
                                </div>
                            </div>
                        </form> 
                </div>";