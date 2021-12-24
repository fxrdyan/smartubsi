<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kelas extends CI_Controller
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
      $data['kelas'] = $this->ModelUser->getKelas()->result_array();

      $this->form_validation->set_rules(
         'kelas',
         'Kelas',
         'required',
         [
            'required' => 'Kelas harus diisi',
         ]
      );
      $this->form_validation->set_rules(
         'id_ketua',
         'Ketua',
         'required',
         [
            'required' => 'Ketua harus diisi'
         ]
      );

      //konfigurasi sebelum gambar diupload
      $config['upload_path'] = './assets/img/upload/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max_size'] = '3000';
      $config['max_width'] = '1024';
      $config['max_height'] = '1000';
      $config['file_name'] = 'img' . time();
      $this->load->library('upload', $config);
      if ($this->form_validation->run() == false) {
         $this->load->view('templates/header', $data);
         $this->load->view('templates/sidebar', $data);
         $this->load->view('templates/topbar', $data);
         $this->load->view('kelas/index', $data);
         $this->load->view('templates/footer');
      } else {
         if ($this->upload->do_upload('foto')) {
            $image = $this->upload->data();
            $gambar = $image['file_name'];
         } else {
            $gambar = '';
         }
         $data = [
            'kelas' => $this->input->post('kelas', true),
            'id_ketua' => $this->input->post('id_ketua', true),
         ];
         $this->ModelUser->simpanKelas($data);
         redirect('kelas');
      }
   }

   public function hapusKelas()
   {
       $where = ['id' => $this->uri->segment(3)];
       $this->ModelUser->hapusKelas($where);
       redirect('kelas');
   }
}
