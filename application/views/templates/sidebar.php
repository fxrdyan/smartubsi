<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">SmartUbsi</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown">
              <?php
                $this->session->set_userdata('role_id');
                if ($user['role_id'] == 1) { ?>                                             
                  <a href="<?= base_url('dosen'); ?>"><i class="fas fa-columns"></i><span>Dashboard</span></a>
              <?php } else {?>
                <a href="<?= base_url('user'); ?>"><i class="fas fa-columns"></i><span>Dashboard</span></a>
              <?php }?>
              </li>
              <li class="menu-header">Master Data</li>
              <li class="nav-item dropdown">
                <a href="<?= base_url('mahasiswa'); ?>"><i class="fas fa-user"></i> <span>Mahasiswa</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?= base_url('kelas'); ?>"><i class="fas fa-home"></i> <span>Kelas</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?= base_url('kampus'); ?>"><i class="fas fa-building"></i> <span>Kampus</span></a>
              </li>
              <li class="nav-item dropdown">
                <a href="<?= base_url('prodi'); ?>"><i class="fas fa-book"></i> <span>Program Studi</span></a>
              </li>
            </ul>
        </aside>
      </div>