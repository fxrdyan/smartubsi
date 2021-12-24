 <!-- Main Content -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>Data Kampus</h1>
             <div class="section-header-breadcrumb">
                 <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                 <div class="breadcrumb-item">Kampus</div>
             </div>
         </div>
         <?= $this->session->flashdata('pesan'); ?>
         <div class="row">
             <div class="col-lg-12">
                 <?php if (validation_errors()) { ?>
                     <div class="alert alert-danger" role="alert">
                         <?= validation_errors(); ?>
                     </div>
                 <?php } ?>
                 <?= $this->session->flashdata('pesan'); ?>

                 <form action="<?= base_url('kampus'); ?>" method="post" enctype="multipart/form-data" class="modal-part" id="modal-tambah-kampus">
                     <div class="form-group">
                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="Kampus" name="kampus">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <textarea type="text" class="form-control" placeholder="Alamat" name="alamat_kampus"></textarea>
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="Kontak" name="kontak">
                         </div>
                     </div>
                 </form>

                 <div class="section-body">
                     <div class="row">
                         <div class="col-12">
                             <div class="card">
                                 <div class="card-body">
                                     <div class="buttons">
                                         <button class="btn btn-primary" id="tambah-kampus">Tambah Data</button>
                                     </div>
                                     <div class="table-responsive">
                                         <table class="table table-striped" id="table-2">
                                             <thead>
                                                 <tr>
                                                     <th>Kampus</th>
                                                     <th>Alamat</th>
                                                     <th>Kontak</th>
                                                     <?=
                                                        $this->session->set_userdata('role_id');
                                                        if ($user['role_id'] == 1) {
                                                            echo '<th>Pilihan</th>';
                                                        }
                                                        ?>
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 <?php
                                                    foreach ($kampus as $k) { ?>
                                                     <tr>
                                                         <td><?= $k['kampus']; ?></td>
                                                         <td><?= $k['alamat_kampus']; ?></td>
                                                         <td><?= $k['kontak']; ?></td>
                                                         <?php
                                                            $this->session->set_userdata('role_id');
                                                            if ($user['role_id'] == 1) { ?>
                                                             <td>
                                                                 <a class="btn btn-icon btn-primary" href="<?= base_url('kampus/ubahKampus/') . $k['id']; ?>"><i class="fas fa-wrench"></i></a>
                                                                 <a class="btn btn-icon btn-danger" onclick="return confirm('Kamu yakin akan menghapus Kampus <?= $k['kampus']; ?> ?');" href="<?= base_url('kampus/hapusKampus/') . $k['id']; ?>"><i class="fas fa-times"></i></a>
                                                             </td>
                                                         <?php } ?>
                                                     </tr>
                                                 <?php } ?>
                                             </tbody>
                                         </table>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
     </section>
 </div>
 </div>
 </div>
 </div>
 <!-- /.container-fluid -->
 </div>
 <!-- End of Main Content -->