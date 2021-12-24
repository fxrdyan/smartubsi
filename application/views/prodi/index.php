 <!-- Main Content -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>Data Program Studi</h1>
             <div class="section-header-breadcrumb">
                 <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                 <div class="breadcrumb-item"><a href="#">Program Studi</a></div>
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

                 <form action="<?= base_url('prodi'); ?>" method="post" enctype="multipart/form-data" class="modal-part" id="modal-tambah-prodi">
                     <div class="form-group">
                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="Program Studi" name="prodi">
                         </div>
                     </div>
                 </form>

                 <div class="section-body">
                     <div class="row">
                         <div class="col-12">
                             <div class="card">
                                 <div class="card-body">
                                     <div class="buttons">
                                         <button class="btn btn-primary" id="tambah-prodi"><i class="fas fa-user-plus"></i>Tambah Data</button>
                                     </div>
                                     <div class="table-responsive">
                                         <table class="table table-striped" id="table-2">
                                             <thead>
                                                 <tr>
                                                     <th>Program Studi</th>
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
                                                    foreach ($prodi as $p) { ?>
                                                     <tr>
                                                         <td><?= $p['prodi']; ?></td>
                                                         <?php
                                                            $this->session->set_userdata('role_id');
                                                            if ($user['role_id'] == 1) { ?>
                                                             <td><a class="btn btn-icon btn-primary" href="<?= base_url('prodi/ubahProdi/') . $p['id']; ?>"><i class="fas fa-wrench"></i></a>
                                                                 <a class="btn btn-icon btn-danger" onclick="return confirm('Kamu yakin akan menghapus Program Studi <?= $p['prodi']; ?> ?');" href="<?= base_url('prodi/hapusProdi/') . $p['id']; ?>"><i class="fas fa-times"></i></a>
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