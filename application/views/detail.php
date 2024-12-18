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

    <style>
        .anime__review__item {
    display: flex;
    margin-bottom: 20px;
}

.anime__review__item__pic img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 15px;
}

.anime__review__item__text h6 {
    font-size: 16px;
    margin-bottom: 5px;
    font-weight: bold;
}

.anime__review__item__text span {
    font-size: 12px;
    color: gray;
}

.anime__review__item__text p {
    font-size: 14px;
    color: #fff;
}

    </style>
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
                                <li><a href="">Kategori<span class="arrow_carrot-down"></span></a>
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
                        <a href="<?= base_url() ?>"><i class="fa fa-home"></i>Home</a>
                        <a href="">Kategori</a>
                        <span><?= $konten->nama_kategori; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Anime Section Begin -->
    <section class="anime-details spad">
        <div class="container">
            <div class="anime__details__content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="anime__details__pic set-bg" data-setbg="<?= base_url('assets/sneat/upload/konten/'.$konten->foto) ?>">
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="anime__details__text">
                            <div class="anime__details__title">
                                <h3><?= $konten->judul; ?></h3>
                                <span><?= $konten->nama; ?></span>
                            </div>
                            <div class="anime__details__rating">
                                <div class="rating">
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-star-half-o"></i></a>
                                </div>
                                <span>1.029 Votes</span>
                            </div>
                            <p><?= $konten->keterangan; ?></p>
                            <div class="anime__details__widget">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <ul>
                                            <li><span>Genre:</span><?= $konten->nama_kategori; ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime__details__btn">
                                <a href="<?= isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : base_url('home') ?>" class="follow-btn">Back</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <div class="anime__details__review">
    <div class="section-title">
        <h5>Reviews</h5>
    </div>  -->
    <!-- Area untuk menampilkan komentar -->
    <!-- <div id="comment-list"> -->
        <!-- Komentar yang telah ada -->
        <!-- <div class="anime__review__item">
            <div class="anime__review__item__pic">
                <img src="<?= base_url('assets/front/'); ?>img/person-circle.svg" alt="">
            </div>
        </div>
    </div> -->
    
    <!-- Form input komentar -->
    <!-- <div class="anime__details__form">
        <div class="section-title">
            <h5>Your Comment</h5>
        </div>
        <form id="comment-form">
            <textarea id="user-comment" placeholder="Your Comment" required></textarea>
            <button type="submit" id="submit-btn"><i class="fa fa-location-arrow"></i> Review</button>
        </form>
    </div>
</div> -->

        <!-- Anime Section End -->

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
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Search here.....">
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

        <script>
            // Ambil elemen dari DOM
const commentForm = document.getElementById("comment-form");
const userComment = document.getElementById("user-comment");
const commentList = document.getElementById("comment-list");

// Fungsi untuk menampilkan komentar dari Local Storage
function displayComments() {
    // Ambil data komentar dari Local Storage
    const comments = JSON.parse(localStorage.getItem("comments")) || [];

    // Kosongkan daftar komentar
    commentList.innerHTML = "";

    // Render komentar ke dalam HTML
    comments.forEach(comment => {
        const newComment = `
            <div class="anime__review__item">
                <div class="anime__review__item__pic">
                    <img src="img/anime/default-user.jpg" alt="User">
                </div>
                <div class="anime__review__item__text">
                    <h6>Guest User - <span>Just now</span></h6>
                    <p>${comment}</p>
                </div>
            </div>
        `;
        commentList.insertAdjacentHTML("beforeend", newComment);
    });
}

// Tampilkan komentar saat halaman dimuat
document.addEventListener("DOMContentLoaded", displayComments);

// Tambahkan event listener ke form
commentForm.addEventListener("submit", function (e) {
    e.preventDefault(); // Mencegah refresh halaman

    // Ambil nilai input komentar
    const newComment = userComment.value;

    if (newComment.trim() !== "") {
        // Ambil komentar lama dari Local Storage
        const comments = JSON.parse(localStorage.getItem("comments")) || [];

        // Tambahkan komentar baru
        comments.push(newComment);

        // Simpan kembali ke Local Storage
        localStorage.setItem("comments", JSON.stringify(comments));

        // Tampilkan ulang komentar di halaman
        displayComments();

        // Kosongkan input
        userComment.value = "";
    }
});


        </script>

    </body>

    </html>