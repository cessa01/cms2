<div id="ngilang">
  <?= $this->session->flashdata('alert') ?>
</div>
<div class="col-md-12 mb-3">
    <div class="card">
        <form action="<?= base_url('kontributor/caraousel/simpan') ?>" method="POST" enctype='multipart/form-data'>
            <h5 class="card-header">File input</h5>
            <div class="card-body">
            <div class="col mb-3">
                    <label class="form-label">Judul</label>
                    <input type="text" class="form-control" placeholder="Judul foto" name="judul" required />
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Pilih foto dengan ukuran (1:3)</label>
                    <input class="form-control" type="file" name="foto">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>

<?php foreach ($caraousel as $aa) { ?>
<div class="col-md-12 mb-3">
    <div class="card h-100">
        <img class="card-img-top" src="<?= base_url('assets/sneat/upload/caraousel/'.$aa['foto']) ?>">
        <div class="card-body">
            <h5 class="card-title"><?= $aa['judul'] ?></h5>
            <a href="<?= base_url('kontributor/caraousel/delete_data/'.$aa['foto']); ?>" class="btn btn-sm btn-danger"
              onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span
              class="tf-icons bx bx-trash alt"></span></a>
        </div>
    </div>
</div>
</div>
<?php } ?>