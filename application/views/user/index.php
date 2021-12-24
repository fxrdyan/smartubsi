<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Profile</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Profile</div>
      </div>
    </div>
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
              <div class="profile-widget-name"><?= $user['nama']; ?></div>
              <div class="text-muted d-inline font-weight-normal">
                <p>
                <?= $user['nama']; ?>
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
            <form method="post" class="needs-validation" novalidate="">
              <div class="card-header">
                <h4>Edit Profil</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="form-group col-12">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" value="<?= $user['nama']; ?>" required="">
                    <div class="invalid-feedback">
                      Please fill in the first name
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-7 col-12">
                    <label>Tempat</label>
                    <input type="text" class="form-control" value="<?= $user['tempat_lahir']; ?>" required="">
                  </div>
                  <div class="form-group col-md-5 col-12">
                    <label>Tanggal Lahir</label>
                    <input type="tel" class="form-control" value="<?= $user['tanggal_lahir']; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                    <label class="d-block">Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jk" value="Laki-laki" <?php if ($user['jk'] == 'Laki-laki'){ echo 'checked'; } ?>>
                      <label class="form-check-label" for="jk1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="jk" value="Perempuan" <?php if ($user['jk'] == 'Perempuan'){ echo 'checked'; } ?>>
                      <label class="form-check-label" for="jk2">Perempuan</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                  <label class="d-block">Agama</label>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" value="Islam" <?php if ($user['agama'] == 'Islam'){ echo 'checked'; } ?>>
                        <label class="form-check-label" for="agama1">Islam</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" value="Kristen" <?php if ($user['agama'] == 'Kristen'){ echo 'checked'; } ?>>
                        <label class="form-check-label" for="agama2">Kristen</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" value="Budha" <?php if ($user['agama'] == 'Budha'){ echo 'checked'; } ?>>
                        <label class="form-check-label" for="agama3">Budha</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" value="Hindu" <?php if ($user['agama'] == 'Hindu'){ echo 'checked'; } ?>>
                        <label class="form-check-label" for="agama4">Hindu</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="agama" value="Kong Hu Cu" <?php if ($user['agama'] == 'Kong Hu Cu'){ echo 'checked'; } ?>>
                        <label class="form-check-label" for="agama5">Kong Hu Cu</label>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-7 col-12">
                    <label>Email</label>
                    <input type="email" class="form-control" value="<?= $user['email']; ?>" required="">
                    <div class="invalid-feedback">
                      Masukkan Email yang benar
                    </div>
                  </div>
                  <div class="form-group col-md-5 col-12">
                    <label>Phone</label>
                    <input type="tel" class="form-control" value="<?= $user['telp']; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-12">
                    <label>Alamat</label>
                    <textarea class="form-control summernote-simple"><?= $user['alamat']; ?></textarea>
                  </div>
                </div>
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary">Save Changes</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>