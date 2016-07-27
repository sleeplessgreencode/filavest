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
                    <div class=\"navbar navbar-default navbar-fixed-top\">
                        <div class=\"container-fluid navigasi\">
                        <div class=\"navbar-header\">
                            <!-- collapsing button menu -->
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#collapsingNav\" aria-expanded=\"false\">
                                <span><i class=\"material-icons\">dehaze</i></span>
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
                    </div>";

$kaki =         "<div class=\"container-fluid blok-kaki\">
                    This site and all of its layout (including but not limited to) were designed and built with all the love in the world by jPao with the help of no one.....</br></br> *cough*bootstrap*cough*</br></br>
                    Licensed to Filavest. Copyright 2016.
                </div>
                <!-- Script jquery dan bootstrap -->
                <script src=\"js/jquery.js\"></script>
                <script src=\"js/bootstrap.min.js\"></script>
                <script src=\"js/bootstrap.js\"></script>
                <script src=\"js/bootstrap-transition.js\"></script>
                <script src=\"js/bootstrap-alert.js\"></script>
                <script src=\"js/bootstrap-modal.js\"></script>
                <script src=\"js/bootstrap-dropdown.js\"></script>
                <script src=\"js/bootstrap-scrollspy.js\"></script>
                <script src=\"js/bootstrap-tab.js\"></script>
                <script src=\"js/bootstrap-tooltip.js\"></script>
                <script src=\"js/bootstrap-popover.js\"></script>
                <script src=\"js/bootstrap-button.js\"></script>
                <script src=\"js/bootstrap-collapse.js\"></script>
                <script src=\"js/bootstrap-carousel.js\"></script>
                <script src=\"js/bootstrap-typeahead.js\"></script>
                <script src=\"js/bootstrap-affix.js\"></script>
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
                        <form class=\"form-horizontal\" method=\"post\" action=\"index.php?modeHalaman=daftar\">
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">Nama Depan:</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" class=\"form-control\" id=\"namaDepan\" name=\"namaDepan\" placeholder=\"Nama depan anda\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">Nama Belakang:</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" class=\"form-control\" id=\"namaBelakang\" name=\"namaBelakang\" placeholder=\"Nama belakang anda\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">Nama Pengguna:</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"text\" class=\"form-control\" id=\"namaPengguna\" name=\"namaPengguna\" placeholder=\"(4 - 12 karakter) Digunakan untuk login\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">Kata Kunci:</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" class=\"form-control\" id=\"kataKunci\" name=\"kataKunci\" placeholder=\"Kata kunci untuk login\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"col-sm-2 control-label\">Konfirmasi Kata Kunci:</label>
                                <div class=\"col-sm-10\">
                                    <input type=\"password\" class=\"form-control\" id=\"konfirmasiKataKunci\" name=\"konfirmasiKataKunci\"  placeholder=\"Tulis ulang kata kunci anda\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <div class=\"col-sm-offset-2 col-sm-10\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Daftar</button>
                                </div>
                            </div>
                        </form> 
                </div>";