<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kampus extends CI_Controller
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
      $data['kampus'] = $this->ModelUser->getKampus()->result_array();

      $this->form_validation->set_rules(
         'kampus',
         'Kampus',
         'required',
         [
            'required' => 'Kampus harus diisi',
         ]
      );
      $this->form_validation->set_rules(
         'alamat_kampus',
         'Alamat Kampus',
         'required',
         [
            'required' => 'Alamat Kampus harus diisi'
         ]
      );
      $this->form_validation->set_rules(
         'kontak',
         'Kontak',
         'required',
         [
            'required' => 'Kontak harus diisi',
         ]
      );
      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('kampus/index', $data);
         $this->load->view('templates/footer');
      } else {
         $data = [
            'kampus' => $this->input->post('kampus', true),
            'alamat_kampus' => $this->input->post('alamat_kampus', true),
            'kontak' => $this->input->post('kontak', true),
         ];
         $this->ModelUser->simpanKampus($data);
         redirect('kampus');
      }
   }

   public function hapusKampus()
   {
       $where = ['id' => $this->uri->segment(3)];
       $this->ModelUser->hapusKampus($where);
       redirect('kampus');
   }
}
