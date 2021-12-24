<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dosen extends CI_Controller
{
 public function __construct()
 {
 parent::__construct();
 if (empty($this->session->userdata('email'))){
    redirect('autentifikasi');
 }
//  cek_login();
 }
 public function index()
 {
    $data['judul'] = 'Dashboard';
    $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
    $data['mahasiswa'] = $this->ModelUser->getMahasiswa()->result_array();
    $data['kelas'] = $this->ModelUser->getKelas()->result_array();
    $this->load->view('templates/header', $data);
    $this->load->view('templates/sidebar', $data);
    $this->load->view('templates/topbar', $data);
    $this->load->view('dosen/index', $data);
    $this->load->view('templates/footer');
    }
   }
   