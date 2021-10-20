    <div class="cara-gabung-wrapper">
        <div class="container">
            <h2 class="motto text-center">Gabung jadi keluarga Mitra Agraris Point</h2>
            <h2 class="sub-motto text-center">dan dapatkan berbagai manfaatnya</h2>
            <p class="text-center">Toko tumbuh pesat, dukung petani sejahtera</p>
            <br></br>
            <div class="form-wrapper">
                <form class="contact" method="post" action="/nimda/create">
                    <?= csrf_field(); ?>
                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Nama Lengkap (Sesuai KTP)</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_lengkap')) ? 'is-invalid' : ''; ?>" placeholder="Nama Lengkap (Sesuai KTP)" name="nama_lengkap" value="<?= old('nama_lengkap'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_lengkap') ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Nama Toko Anda</label>
                            <input type="text" class="form-control <?= ($validation->hasError('nama_toko')) ? 'is-invalid' : ''; ?>" placeholder="Nama Toko Anda" name="nama_toko" value="<?= old('nama_toko'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_toko') ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label>Nomer Handphone Aktif</label>
                            <input type="text" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" placeholder="Nomer Handphone Aktif" name="no_hp" value="<?= old('no_hp'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('no_hp') ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Alamat Domisili Toko</label>
                            <input type="text" class="form-control <?= ($validation->hasError('no_hp')) ? 'is-invalid' : ''; ?>" placeholder="Alamat Domisili Toko" name="alamat_toko" value="<?= old('alamat_toko'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('alamat_toko') ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label>Kota - Provinsi Toko</label>
                            <input type="text" class="form-control <?= ($validation->hasError('provinsi_toko')) ? 'is-invalid' : ''; ?>" placeholder="Alamat Domisili Toko" name="provinsi_toko" value="<?= old('provinsi_toko'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('provinsi_toko') ?>
                            </div>
                        </div>
                    </div>
                    <br></br>
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <button type="submit" class="btn btn-warning btn-blocbtn-round"><i class="fa fa-check-circle"></i> Kirim </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>