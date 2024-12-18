<h1>Selamat Datang di Halaman Dashboard</h1>
<?= $this->session->userdata('nama'); ?>

<!-- Blog Start -->
<div class="container-fluid pt-5">
      <div class="container">
        <div class="text-center pb-2">
          <h1 class="mb-4">Daftar Film</h1>
        </div>
        <div class="row pb-3">

        <?php foreach ($konten as $uu) { ?>
          <div class="col-lg-4 mb-4">
            <div class="card border-0 shadow-sm mb-2">
              <img class="card-img-top mb-2" src="<?= base_url('assets/sneat/upload/konten/'.$uu['foto']) ?>"/>
              <div class="card-body bg-light text-center p-4">
                <h4 class=""><?= $uu['judul'] ?></h4>
                <div class="d-flex justify-content-center mb-3">
                  <small class="mr-3"><i class="fa fa-user text-primary"></i><?= $uu['nama'] ?></small>
                  <small class="mr-3"><i class="fa fa-folder text-primary"></i><?= $uu['nama_kategori'] ?></small>
                </div>
                <a href="<?= base_url('home/artikel/'.$uu['slug']) ?>" class="btn btn-primary px-4 mx-auto my-2"
                  >Baca Selengkapnya</a
                >
              </div>
            </div>
          </div>
          <?php } ?>
          <div class="col-md-12 mb-4">
            
          </div>
        </div>
      </div>
    </div>
    <!-- Blog End -->