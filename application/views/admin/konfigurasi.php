<div id="ngilang">
  <?= $this->session->flashdata('alert') ?>
</div>
<form action="<?= base_url('admin/konfigurasi/update') ?>" method="POST">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="modalCenterTitle">Konfigurasi</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Judul Website</label>
                        <input type="text" class="form-control" name="judul" value="<?= $konfig->judul_website; ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Profile</label>
                        <textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Facebook</label>
                        <input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Instagram</label>
                        <input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Alamat</label>
                        <input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="col mb-3">
                        <label class="form-label">Whatsapp</label>
                        <input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>" />
                    </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
              <div class="row g-2">
                <div class="col mb-0">
                  <!-- <label for="emailWithTitle" class="form-label">Email</label>
                                    <input
                                      type="text"
                                      id="emailWithTitle"
                                      class="form-control"
                                      placeholder="xxxx@xxx.xx"
                                    /> -->
                </div>
                <div class="col mb-0">
                  <!-- <label for="dobWithTitle" class="form-label">DOB</label>
                                    <input
                                      type="text"
                                      id="dobWithTitle"
                                      class="form-control"
                                      placeholder="DD / MM / YY"
                                    /> -->
                </div>
              </div>
            </div>
                        </div>
        </form>