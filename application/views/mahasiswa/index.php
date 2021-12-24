 <!-- Main Content -->
 <div class="main-content">
     <section class="section">
         <div class="section-header">
             <h1>Data Mahasiswa</h1>
             <div class="section-header-breadcrumb">
                 <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                 <div class="breadcrumb-item">Mahasiswa</div>
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

                 <!-- Modal Tambah Data -->
                 <form action="<?= base_url('mahasiswa'); ?>" method="post" enctype="multipart/form-data" class="modal-part" id="modal-tambah-mahasiswa">
                     <div class="form-group">
                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="NIM" name="nim">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="Tempat Lahir" name="tempat_lahir">
                         </div>
                     </div>
                     <label class="d-block">Tanggal Lahir</label>
                     <div class="form-group">
                         <div class="input-group">
                             <input type="date" class="form-control" name="tanggal_lahir">
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="d-block">Jenis Kelamin</label>
                         <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="jk" value="Laki-laki" checked>
                             <label class="form-check-label" for="jk1">Laki-laki</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="jk" value="Perempuan" checked>
                             <label class="form-check-label" for="jk2">Perempuan</label>
                         </div>
                     </div>
                     <div class="form-group">
                         <label class="d-block">Agama</label>
                         <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="agama" value="Islam" checked>
                             <label class="form-check-label" for="agama1">Islam</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="agama" value="Kristen" checked>
                             <label class="form-check-label" for="agama2">Kristen</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="agama" value="Budha" checked>
                             <label class="form-check-label" for="agama3">Budha</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="agama" value="Hindu" checked>
                             <label class="form-check-label" for="agama4">Hindu</label>
                         </div>
                         <div class="form-check form-check-inline">
                             <input class="form-check-input" type="radio" name="agama" value="Kong Hu Cu" checked>
                             <label class="form-check-label" for="agama5">Kong Hu Cu</label>
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <textarea type="text" class="form-control" placeholder="Alamat" name="alamat"></textarea>
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="Email" name="email">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="Nomor Telepon" name="telp">
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <select name="id_kampus" class="form-control form-control-user">
                                 <option value="">Pilih Kampus</option>
                                 <?php
                                    foreach ($kampus as $km) { ?>
                                     <option value="<?= $km['id']; ?>"><?= $km['kampus']; ?></option>
                                 <?php } ?>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <select name="id_kelas" class="form-control form-control-user">
                                 <option value="">Pilih Kelas</option>
                                 <?php
                                    foreach ($kelas as $k) { ?>
                                     <option value="<?= $k['id']; ?>"><?= $k['kelas']; ?></option>
                                 <?php } ?>
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <select name="id_prodi" class="form-control form-control-user">
                             <option value="">Program Studi</option>
                             <?php
                                foreach ($prodi as $p) { ?>
                                 <option value="<?= $p['id']; ?>"><?= $p['prodi']; ?></option>
                             <?php } ?>
                         </select>
                     </div>
                     <div class="form-group">
                         <select name="waktu" class="form-control form-control-user">
                             <option value="">Waktu</option>
                             <option value="Sore/Malam">Sore/Malam</option>
                             <option value="Pagi/Siang">Pagi/Siang</option>
                         </select>
                     </div>
                     <div class="form-group">
                         <div class="input-group">
                             <input type="text" class="form-control" placeholder="Semester" name="semester">
                         </div>
                     </div>
                 </form>

                 <div class="section-body">
                     <div class="row">
                         <div class="col-12">
                             <div class="card">
                                 <div class="card-body">
                                     <div class="buttons">
                                         <button class="btn btn-primary" id="tambah-mahasiswa"><i class="fas fa-user-plus"></i> Tambah Data</button>
                                     </div>
                                     <div class="table-responsive">
                                         <table class="table table-striped" id="table-2">
                                             <thead>
                                                 <tr>
                                                     <th>Foto</th>
                                                     <th>NIM</th>
                                                     <th>Nama</th>
                                                     <th>Kelas</th>
                                                     <th>Program Studi</th>
                                                     <th>Semester</th>
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
                                                    $a = 1;
                                                    foreach ($mahasiswa as $m) { ?>
                                                     <tr>
                                                         <td>
                                                             <picture>
                                                                 <source srcset="" type="image/svg+xml">
                                                                 <img alt="image" src="<?= base_url('assets/'); ?>img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="<?= $m['nama']; ?>">
                                                             </picture>
                                                         </td>
                                                         <td><?= $m['nim']; ?></td>
                                                         <td><?= $m['nama']; ?></td>
                                                         <td><?= $m['id_kelas']; ?></td>
                                                         <td><?= $m['id_prodi']; ?></td>
                                                         <td><?= $m['semester']; ?></td>
                                                         <?php
                                                            $this->session->set_userdata('role_id');
                                                            if ($user['role_id'] == 1) { ?>
                                                             <td>
                                                                 <a class="btn btn-icon btn-primary" href="<?= base_url('mahasiswa/ubahMahasiswa/') . $m['id']; ?>"><i class="fas fa-wrench"></i></a>
                                                                 <button class="btn btn-icon btn-danger" onclick="return confirm('Kamu yakin akan menghapus Data Mahasiswa <?= $m['nama']; ?> ?');"><i class="fas fa-times"></i></button>
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
                 <div class="modal fade" id="modalku" tabindex="-1" role="dialog">
                     <div class="modal-dialog">
                         <div class="modal-contet">
                             dfdsfsdf
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