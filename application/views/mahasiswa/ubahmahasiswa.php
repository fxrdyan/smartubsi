<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <?php if (validation_errors()) { ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php } ?>
      <?= $this->session->flashdata('pesan'); ?>
      <h1>Profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Edit Data Mahasiswa</div>
      </div>
    </div>

    <?php foreach ($mahasiswa as $m) { ?>
      <div class="section-body">
        <div class="row mt-sm-4">
          <div class="col-12 col-md-12 col-lg-5">
            <div class="card profile-widget">
              <div class="profile-widget-header">
                <img alt="image" src="<?= base_url('assets/'); ?>img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                <div class="profile-widget-items">
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">NIM</div>
                    <div class="profile-widget-item-value">12201134</div>
                  </div>
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">KELAS</div>
                    <div class="profile-widget-item-value">12.3B.02</div>
                  </div>
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">IPK</div>
                    <div class="profile-widget-item-value">4.00</div>
                  </div>
                </div>
              </div>
              <div class="profile-widget-description">
                <div class="profile-widget-name"><?= $m['nama']; ?></div>
                <div class="text-muted d-inline font-weight-normal">
                  <p>
                    <?= $m['nama']; ?>
                </div>
                </p>
                Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a fictional character but an original hero in my family, a hero for his children and for his wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with <b>'John Doe'</b>.
              </div>
              <div class="card-footer text-center">
                <div class="font-weight-bold mb-2">Follow Ujang On</div>
                <a href="#" class="btn btn-social-icon btn-facebook mr-1">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="btn btn-social-icon btn-twitter mr-1">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="btn btn-social-icon btn-github mr-1">
                  <i class="fab fa-github"></i>
                </a>
                <a href="#" class="btn btn-social-icon btn-instagram">
                  <i class="fab fa-instagram"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-7">
            <div class="card">
              <form action="<?= base_url('mahasiswa/ubahMahasiswa'); ?>" method="post" enctype="multipart/form-data">
                <div class="card-header">
                  <h4>Edit Data Mahasiswa</h4>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="form-group col-12">
                      <label>NIM</label>
                      <input type="text" class="form-control" value="<?= $m['nim']; ?>" name="nim" required="">
                      <div class="invalid-feedback">
                        Please fill in the first name
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label>Nama Lengkap</label>
                      <input type="text" class="form-control" value="<?= $m['nama']; ?>" name="nama" required="">
                      <div class="invalid-feedback">
                        Please fill in the first name
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Tempat</label>
                      <input type="text" class="form-control" value="<?= $m['tempat_lahir']; ?>" name="tempat_lahir">
                    </div>
                    <div class="form-group col-md-5 col-12">
                      <label>Tanggal Lahir</label>
                      <input type="text" class="form-control" value="<?= $m['tanggal_lahir']; ?>" name="tanggal_lahir">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label class="d-block">Jenis Kelamin</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" value="Laki-laki" <?php if ($m['jk'] == 'Laki-laki') {
                                                                                                    echo 'checked';
                                                                                                  } ?>>
                        <label class="form-check-label" for="jk1">Laki-laki</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" value="Perempuan" <?php if ($m['jk'] == 'Perempuan') {
                                                                                                    echo 'checked';
                                                                                                  } ?>>
                        <label class="form-check-label" for="jk2">Perempuan</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label class="d-block">Agama</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" value="Islam" <?php if ($m['agama'] == 'Islam') {
                                                                                                  echo 'checked';
                                                                                                } ?>>
                        <label class="form-check-label" for="agama1">Islam</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" value="Kristen" <?php if ($m['agama'] == 'Kristen') {
                                                                                                    echo 'checked';
                                                                                                  } ?>>
                        <label class="form-check-label" for="agama2">Kristen</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" value="Budha" <?php if ($m['agama'] == 'Budha') {
                                                                                                  echo 'checked';
                                                                                                } ?>>
                        <label class="form-check-label" for="agama3">Budha</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" value="Hindu" <?php if ($m['agama'] == 'Hindu') {
                                                                                                  echo 'checked';
                                                                                                } ?>>
                        <label class="form-check-label" for="agama4">Hindu</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" value="Kong Hu Cu" <?php if ($m['agama'] == 'Kong Hu Cu') {
                                                                                                        echo 'checked';
                                                                                                      } ?>>
                        <label class="form-check-label" for="agama5">Kong Hu Cu</label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-7 col-12">
                      <label>Email</label>
                      <input type="email" class="form-control" value="<?= $m['email']; ?>" name="email">
                      <div class="invalid-feedback">
                        Masukkan Email yang benar
                      </div>
                    </div>
                    <div class="form-group col-md-5 col-12">
                      <label>No Telepon</label>
                      <input type="tel" class="form-control" value="<?= $m['telp']; ?>" name="tel">
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-12">
                      <label>Alamat</label>
                      <textarea class="form-control summernote-simple" name="alamat"><?= $m['alamat']; ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="card-footer text-right">
                  <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </section>
</div>