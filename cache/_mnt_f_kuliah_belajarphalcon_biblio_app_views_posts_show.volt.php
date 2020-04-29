<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Biblio - <?= $this->tag->getTitle() ?></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->url->get('img/favicon.ico')?>"/>
        <script src="https://kit.fontawesome.com/f4dfdc0d09.js" crossorigin="anonymous"></script>
        <?= $this->assets->outputCss() ?>
    </head>
    <body class="">
        <section id="navbar">
            <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 navbar-light shadow-sm">
                <span class="my-0 mr-md-auto "><a href="/" class="logo text-dark font-weight-bold">Biblio</a></span>
                <nav class=" my-2 my-md-0 mr-md-3">
                    <a class="p-3 text-dark" href="/">Beranda</a>
                    <a class="p-3 text-dark" href="/posts/show">Review</a>
                    <a class="p-3 text-dark" href="#">Kontak</a>
                </nav>
                <div class="dropdown-show">
                    <a class="fas fa-user dropdown-toggle" style="color: black;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="/posts/show">Buat Post</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/home/logout">Logout</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="mb-3 ">
            
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="section-row"><h5 class=" font-weight-bold">Bagaimana bukumu hari ini?</h5></div>
                <div class="card border mb-3 border-0 shadow rounded-0">
                    <div class="card-body">
                        <form action="/posts/save" method="post">
                            <div class="form-group">
                                <label for="judul" class="text-dark">Judul</label>
                                <input type="text" name="judul"class="form-control ">
                            </div>
                            <div class="form-group">
                                <label for="judul" class="text-dark ">Isi Post</label>
                                <textarea class=" form-control" name="isi" ></textarea>
                            </div>
                            <button type="submit" class="btn btn-sm btn-dark">Post</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div class="section-row"><h5 class=" font-weight-bold ">Linimasa</h5></div>
                <?php foreach ($posts as $post) { ?>
                    <?php foreach ($users as $user) { ?>
                        <?php if (($post->id_user == $user->id)) { ?>
                <div class="card mb-2 shadow border border-0 rounded-0">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="profil"></div>
                            </div>
                            <div class="col-md-10">
                                <a href="/posts/detail/<?= $post->id ?>" class="card-title text-dark font-weight-bold title-card"><?= $post->judul ?></a>
                                <div class=" align-self-start">
                                    <p class=" pr-2"><?= $user->nama ?></p>
                                    <?php if (($post->id_user == $auth['id'])) { ?>
                                    <a href="/posts/edit/<?= $post->id ?>" class="small-text p-1 text-white bg-info">Edit post</a>
                                    <a href="/posts/delete/<?= $post->id ?>" class="small-text text-white bg-danger p-1 ">Delete post</a>
                                    <?php } ?>
                                </div>
                                <div class="pt-3">
                                    <p class="card-p"><?= $post->isi ?></p> 
                                </div> 
                            </div>
                        </div>
                    </div>    
                </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
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
