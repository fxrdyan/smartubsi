<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Prodi extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      if (empty($this->session->userdata('email'))) {
         redirect('autentifikasi');
      }
      //  cek_login();
   }
   public function index()
   {
      $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
      $data['mahasiswa'] = $this->ModelUser->getMahasiswa()->result_array();
      $data['prodi'] = $this->ModelUser->getProdi()->result_array();

      $this->form_validation->set_rules(
         'prodi',
         'Program Studi',
         'required',
         [
            'required' => 'Kampus harus diisi',
         ]
      );

      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('prodi/index', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'prodi' => $this->input->post('prodi', true),
         ];
         $this->ModelUser->simpanProdi($data);
         redirect('prodi');
      }
   }

   public function hapusProdi()
   {
      $where = ['id' => $this->uri->segment(3)];
      $this->ModelUser->hapusProdi($where);
      redirect('prodi');
   }
}
