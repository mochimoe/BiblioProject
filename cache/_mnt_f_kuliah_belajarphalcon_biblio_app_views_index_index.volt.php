<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Biblio - Beranda</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>"/>
        <script src="https://kit.fontawesome.com/f4dfdc0d09.js" crossorigin="anonymous"></script>
        <?= $this->assets->outputCss() ?>
        <style>
            html {
                scroll-behavior: smooth;
            }
        </style>
    </head>
    <body class="body-index">
        <section id="home">
            <div class="container d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 navbar-light fixed-top" style="background-color: white;">
                <span class="my-0 mr-md-auto "><a href="/" class="logo text-dark font-weight-bold">Biblio</a></span>
                <nav class=" my-2 my-md-0 mr-md-3">
                    <a class="p-3 text-dark" href="#home">Beranda</a>
                    <a class="p-3 text-dark" href="#developer">Developer</a>
                </nav>
                <a class="btn btn-outline-dark" href="/session">Masuk</a>
            </div>
        </section>

        <section id="header" class="container">
            <div class=" d-flex justify-content-center text-dark" style="margin-top: 100px;">
                <h1 class="header-text">Hello Bibliophile!</h1>
            </div>
            <!-- <div class="p-4 p-md-5 d-flex justify-content-center text-dark">
                <blockquote class="p-header">"Siapapun yang terhibur dengan buku-buku, kebahagiaan tak akan sirna dari dirinya." - Ali bin Abi Thalib</blockquote>
            </div> -->

        </section>

        <section class="header-about container" style="margin-top: 250px;" id="about">
            <div class="row justify-content-center">
                <div class="col-md-4 col-sm-12 text-center section">
                    <div class="card border border-0 shadow">
                        <div class="card-body">
                            <div class="section-row">
                                <i class="fas fa-book fa-3x"></i>
                            </div>
                            
                            <p class="pt-3">Berbagi cerita dengan biblio lainnya</p>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->

                <div class="col-md-4 col-sm-12 text-center">
                    <div class="card border border-0 shadow">
                        <div class="card-body">
                            <div class="section-row">
                                <i class="fas fa-search fa-3x"></i>
                            </div>
                            
                            <p class="pt-3">Temukan review buku yang kamu inginkan</p>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->

                <div class="col-md-4 col-sm-12 text-center">
                    <div class="card border border-0 shadow">
                        <div class="card-body">
                            <div class="section-row">
                                <i class="fas fa-user-friends fa-3x"></i>
                            </div>
                            
                            <p class="pt-3">Bertemu teman sehobi</p>
                        </div>
                    </div>
                </div><!-- /.col-lg-4 -->
              </div><!-- /.row -->
        </section>

        <section class="developer-header " style="margin: 300px;" id="developer">
            <div class="container">
                <div class="card border border-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-8">
                                <p class="font-weight-bold">
                                    Perkenalkan nama saya Tria Nur Aisyah Amini dari Jurusan Teknik Informatika, Institut Teknologi Sepuluh Nopember.
                                    Website ini dibuat dalam rangka memenuhi tugas individu mata kuliah Pemrogramman Berbasis Kerangka Kerja. Website ini
                                    dibuat menggunakan Framerok PHP yaitu Phalcon.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <!-- jQuery first, then Popper.js, and then Bootstrap's JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
