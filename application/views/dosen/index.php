 <!-- Main Content -->
 <div class="main-content">
    <section class="section">
       <div class="section-header">
          <div class="buttons">
             <button type="button" class="btn btn-primary">
                <i class="fas fa-user"></i> Total Mahasiswa <span class="badge badge-transparent">
                   <?= $this->ModelUser->getMahasiswa()->num_rows(); ?></span>
             </button>
             <button type="button" class="btn btn-danger">
                <i class="fas fa-home"></i> Total Kelas <span class="badge badge-transparent">
                   <?= $this->ModelUser->getKelas()->num_rows(); ?>
                </span>
             </button>
             <button type="button" class="btn btn-warning">
                <i class="fas fa-book"></i> Total Program Studi <span class="badge badge-transparent">
                   <?= $this->ModelUser->getProdi()->num_rows(); ?></span>
             </button>
          </div>
          <div class="section-header-breadcrumb">
             <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
             <div class="breadcrumb-item"><a href="#">Mahasiswa</a></div>
             <div class="breadcrumb-item">Data Mahasiswa</div>
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

             <div class="row">
                <div class="col-12 col-md-6 col-lg-6">
                   <div class="card">
                      <div class="card-header">
                         <h4>Data Mahasiswa</h4>
                      </div>
                      <div class="card-body">
                         <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                  <tr>
                                     <th>#</th>
                                     <th>NIM</th>
                                     <th>Nama</th>
                                     <th>Kelas</th>
                                     <th>Program Studi</th>
                                  </tr>
                                 <?php
                                 $a = 1;
                                 foreach ($mahasiswa as $m) { ?>
                                  <tr>
                                     <td><?= $a++; ?></td>
                                     <td><?= $m['nim']; ?></td>
                                     <td><?= $m['nama']; ?></td>
                                     <td><?= $m['id_kelas']; ?></td>
                                     <td><?= $m['id_prodi']; ?></td>
                                  </tr>
                               <?php } ?>
                            </table>
                         </div>
                      </div>
                      <div class="card-footer text-right">
                         <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                               <li class="page-item disabled">
                                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                               </li>
                               <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                               <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                               </li>
                               <li class="page-item"><a class="page-link" href="#">3</a></li>
                               <li class="page-item">
                                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                               </li>
                            </ul>
                         </nav>
                      </div>
                   </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                   <div class="card">
                      <div class="card-header">
                         <h4>Data Kelas</h4>
                      </div>
                      <div class="card-body">
                         <div class="table-responsive">
                            <table class="table table-bordered table-md">
                                  <tr>
                                     <th>#</th>
                                     <th>Kelas</th>
                                     <th>Ketua</th>
                                     <th>Jumlah Mahasiswa</th>
                                  </tr>
                                 <?php
                                 $a = 1;
                                 foreach ($kelas as $k) { ?>
                                  <tr>
                                     <td><?= $a++; ?></td>
                                     <td><?= $k['kelas']; ?></td>
                                     <td><?= $k['id_ketua']; ?></td>
                                     <td><?= $this->ModelUser->getMahasiswa()->num_rows(); ?></td>
                                  </tr>
                               <?php } ?>
                            </table>
                         </div>
                      </div>
                      <div class="card-footer text-right">
                         <nav class="d-inline-block">
                            <ul class="pagination mb-0">
                               <li class="page-item disabled">
                                  <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                               </li>
                               <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                               <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                               </li>
                               <li class="page-item"><a class="page-link" href="#">3</a></li>
                               <li class="page-item">
                                  <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                               </li>
                            </ul>
                         </nav>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <!-- End of Main Content -->