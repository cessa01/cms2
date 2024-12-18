<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Anime Template">
    <meta name="keywords" content="Anime, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $judul; ?></title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/plyr.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets/front/'); ?>css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="header__nav">
                        <nav class="header__menu mobile-menu">
                            <ul>
                                <li class="active"><a href="<?= base_url() ?>">Home</a></li>
                                <li><a href="<?= base_url() ?>">Kategori <span class="arrow_carrot-down"></span></a>
                                    <ul class="dropdown">
                                    <?php foreach ($kategori as $kate) { ?>
                                        <li><a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>"><?= $kate['nama_kategori'] ?></a></li>
                                        <?php } ?>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="header__right">
                        <a href="#" class="search-switch"><span class="icon_search"></span></a>
                        <a href="<?= base_url('auth') ?>"><span class="icon_profile"></span></a>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="<?= base_url() ?>"><i class="fa fa-home"></i> Home</a>
                        <a href="<?= base_url() ?>">Kategori</a>
                        <span><?= $nama_kategori; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Product Section Begin -->
    <section class="product-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="product__page__content">
                        <div class="product__page__title">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-6">
                                    <div class="section-title">
                                        <h4><?= $nama_kategori; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                            <?php foreach ($konten as $uu) { ?>
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="product__item">
                                    <div class="img-holder" class="zoom-effect">
                                    <a href="<?= base_url('home/artikel/'.$uu['slug']) ?>">
                                    <div class="product__item__pic set-bg" data-setbg="<?= base_url('assets/sneat/upload/konten/'.$uu['foto']) ?>" class="img-fluid">
                                        <div class="ep">18 / 18</div>
                                    </div>
                                    </a>
                                    </div>
                                    <div class="product__item__text">
                                        <ul>
                                          <li><?= $uu['nama_kategori'] ?></li>
                                        </ul>
                                        <h5><a href=""><?= $uu['judul']; ?></a></h5>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
        </div>
    </section>
<!-- Product Section End -->

<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="#" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-lg-4 col-md-6 mb-5">
          <a href="" class="navbar-brand font-weight-bold text-primary m-0 mb-4 p-0" style="font-size: 40px; line-height: 40px">
            <i class="flaticon-043-teddy-bear"></i>
            <span class="text-white"><?= $konfig->judul_website; ?></span>
          </a>
          <p class="text-white">
          <?= $konfig->profil_website; ?>
          </p>
        </div>

        <div class="col-lg-4 col-md-6 mb-5">
          <h3 class="text-primary mb-4">Quick Links</h3>
          <div class="d-flex flex-column justify-content-start">
            <a class="text-white mb-2" href="<?= base_url() ?>"
              ><i class="fa fa-angle-right mr-2"></i>Home</a
            >
            <?php foreach ($kategori as $kate) { ?>
              <a class="text-white mb-2" href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
                <i class="fa fa-angle-right mr-2"></i>
                <?= $kate['nama_kategori'] ?>
              </a>
            <?php } ?>
          </div>
        </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://instagram/kniacs" target="_blank">Cessa</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

              </div>
          </div>
      </div>
  </footer>
  <!-- Footer Section End -->

  <!-- Search model Begin -->
  <div class="search-model">
  <div class="h-100 d-flex align-items-center justify-content-center">
  <div class="search-close-switch"><i class="icon_close"></i></div>
	<a href="#" class="search-button search-toggle" data-selector="#header-wrap">
		<i class="icon icon-search"></i>
	</a>
	<form role="search" method="get" class="search-box" action="<?= base_url('home/search') ?>">
		<input class="search-field text search-input" placeholder="Search" 
			type="search" name="keyword">
	</form>
    </div>
</div>
<!-- Search model end -->

<!-- Js Plugins -->
<script src="<?= base_url('assets/front/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/front/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/front/'); ?>js/player.js"></script>
<script src="<?= base_url('assets/front/'); ?>js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('assets/front/'); ?>js/mixitup.min.js"></script>
<script src="<?= base_url('assets/front/'); ?>js/jquery.slicknav.js"></script>
<script src="<?= base_url('assets/front/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/front/'); ?>js/main.js"></script>

</body>

</html>