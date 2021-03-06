<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?= $judul; ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('vendor/assets/bs4/css/'); ?>bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Bitter:400,700|Black+Ops+One|Montserrat:100,200,300,400,500,600,700"
        rel="stylesheet">
    <link href="<?= base_url('vendor/assets/fontawesome-free/css/'); ?>font-awesome.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('vendor/shoppy/'); ?>css/animate.css">
    <link rel="stylesheet" href="<?= base_url('vendor/shoppy/'); ?>css/main.css">

</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-2 col-0 box-1">

                </div>
                <div class="col-lg-3 col-0 box-2">
                    <!-- <a><a href="https://www.template.net/editable/websites/html5" target="_blank">www.yourecmmercesite.com</a></p> -->
                </div>
                <div class="col-lg-6 col-sm-9 col-12">
                    <ul class="text-right">
                        <?php if ($this->session->userdata('email') == null) :; ?>
                        <li><a href="<?= base_url('auth/registrasi'); ?>">Register</a></li>
                        <li><a href="<?= base_url('auth/login'); ?>">Login</a></li>
                        <?php else :; ?>
                        <li><a href="<?= base_url('user'); ?>">My Account</a></li>
                        <li><a href="<?= base_url('auth/logout'); ?>">Logout</a></li>
                        <?php endif; ?>
                        <!-- <li><a href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a><span>5</span></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <div class="nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?= base_url(); ?>">
                    <img src="<?= base_url('vendor/shoppy/'); ?>images/header-logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php if ($judul == 'HOME') echo 'active'; ?> mx-3"><a
                                class="nav-link <?php if ($judul == 'HOME') echo 'active'; ?>"
                                href="<?= base_url(); ?>home">HOME<span class="sr-only">(current)</span></a></li>
                        <li class="nav-item <?php if ($judul == 'BARANG') echo 'active'; ?>  mx-3"><a
                                class="nav-link  <?php if ($judul == 'BARANG') echo 'active'; ?>"
                                href="<?= base_url(); ?>barang">BARANG<span class="sr-only">(current)</span></a></li>
                        <li class="nav-item  <?php if ($judul == 'JASA') echo 'active'; ?> mx-3"><a
                                class="nav-link  <?php if ($judul == 'JASA') echo 'active'; ?>"
                                href="<?= base_url(); ?>jasa">JASA<span class="sr-only">(current)</span></a></li>
                        <?php if ($this->session->userdata('role_id') != null) : ?>
                        <li class="nav-item  <?php if ($judul == 'MANAJEMEN') echo 'active'; ?> mx-3"><a
                                class="nav-link  <?php if ($judul == 'MANAJEMEN') echo 'active'; ?>"
                                href="<?= base_url(); ?>manajemen">MANAJEMEN<span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <?php endif; ?>
                </div>
            </nav>
        </div>
    </div>