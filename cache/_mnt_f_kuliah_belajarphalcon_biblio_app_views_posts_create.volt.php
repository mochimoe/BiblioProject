<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Biblio - <?= $this->tag->getTitle() ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>"/>
        <script src="https://kit.fontawesome.com/f4dfdc0d09.js" crossorigin="anonymous"></script>
        <?= $this->assets->outputCss() ?>
    </head>
    <body>
        <section id="navbar">
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 navbar-light shadow-sm">
                <span class="my-0 mr-md-auto "><a href="/" class="logo text-dark font-weight-bold">Biblio</a></span>
                <nav class=" my-2 my-md-0 mr-md-3">
                    <a class="p-3 text-dark" href="#">Beranda</a>
                    <a class="p-3 text-dark" href="#">Tentang</a>
                    <a class="p-3 text-dark" href="#">Kontak</a>
                </nav>
                <div class="dropdown-show">
                    <a class="fas fa-user dropdown-toggle" style="color: black;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/posts/create">Buat Post</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/home/logout">Logout</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-3">
            
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="section-row"><h5 class=" ">Create Post</h5></div>
                <div class="card border border-0 bg-secondary">
                    <div class="card-body">
                        <form action="/posts/save" method="post">
                            <div class="form-group">
                                <label for="judul" class="text-white">Judul Buku</label>
                                <input type="text" name="judul"class="form-control border border-0">
                            </div>
                            <div class="form-group">
                                <label for="judul" class="text-white ">Isi Post</label>
                                <textarea class="rounded border border-0 form-control" name="isi" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-sm btn-light">Post</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="section-row"><h5 class=" ">Linimasa</h5></div>
                <div class="card mb-2">
                    <div class="card-header">
                        <h6 class=" font-weight-bold">Bagaimana reaksimu setelah membaca The Lord of The rings?</h6>
                        <small class="small-text">Rianti Nurul</small>
                    </div>
                    <div class="card-body">
                        <p class="card-p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non magnam illum tenetur quisquam, dolorem accusantium nam fugiat? Magni saepe voluptatem a dolorem voluptate blanditiis nostrum qui in, expedita eius sed?</p>                
                    </div>       
                </div>
                <div class="card mb-2">
                    <div class="card-header">
                        <h6 class=" font-weight-bold">Bagaimana reaksimu setelah membaca The Lord of The rings?</h6>
                        <small class="small-text">Rianti Nurul</small>
                    </div>
                    <div class="card-body">
                        <p class="card-p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non magnam illum tenetur quisquam, dolorem accusantium nam fugiat? Magni saepe voluptatem a dolorem voluptate blanditiis nostrum qui in, expedita eius sed?</p>                
                    </div>       
                </div>
                <div class="card mb-2">
                    <div class="card-header">
                        <h6 class=" font-weight-bold">Bagaimana reaksimu setelah membaca The Lord of The rings?</h6>
                        <small class="small-text">Rianti Nurul</small>
                    </div>
                    <div class="card-body">
                        <p class="card-p">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non magnam illum tenetur quisquam, dolorem accusantium nam fugiat? Magni saepe voluptatem a dolorem voluptate blanditiis nostrum qui in, expedita eius sed?</p>                
                    </div>       
                </div>
            </div>
        </div>
    </div>

        </section>

        <!-- jQuery first, then Popper.js, and then Bootstrap's JavaScript -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script>
            $('.dropdown-toggle').dropdown()
        </script>
    </body>
</html>
