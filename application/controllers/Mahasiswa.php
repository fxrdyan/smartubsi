<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //  cek_login();
    }

    public function index()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->ModelUser->getMahasiswa()->result_array();
        $data['prodi'] = $this->ModelUser->getProdi()->result_array();
        $data['kelas'] = $this->ModelUser->getKelas()->result_array();
        $data['kampus'] = $this->ModelUser->getKampus()->result_array();

        $this->form_validation->set_rules(
            'nim',
            'NIM',
            'required|max_length[8]',
            [
                'required' => 'NIM harus diisi', 'max_length' => 'NIM harus 8 digit'
            ]
        );
        $this->form_validation->set_rules(
            'nama',
            'Nama',
            'required',
            [
                'required' => 'Isi nama lengkap'
            ]
        );
        $this->form_validation->set_rules(
            'tempat_lahir',
            'Tempat Lahir',
            'required',
            [
                'required' => 'Tempat Lahir harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'tanggal_lahir',
            'Tanggal Lahir',
            'required',
            [
                'required' => 'Tanggal Lahir harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required',
            [
                'required' => 'Email harus diisi'
            ]
        );
        $this->form_validation->set_rules(
            'telp',
            'No Telepon',
            'required|min_length[10]',
            [
                'required' => 'No Telepon harus diisi', 'max_length' => 'No Telepon tidak valid'
            ]
        );
        $this->form_validation->set_rules(
            'id_kampus',
            'Kampus',
            'required',
            [
                'required' => 'Kampus harus dipilih'
            ]
        );
        $this->form_validation->set_rules(
            'id_kelas',
            'Kelas',
            'required',
            [
                'required' => 'Kelas harus dipilih'
            ]
        );
        $this->form_validation->set_rules(
            'id_prodi',
            'Program Studi',
            'required',
            [
                'required' => 'Program Studi harus dipilih'
            ]
        );
        $this->form_validation->set_rules(
            'semester',
            'Semester',
            'required|max_length[2]',
            [
                'required' => 'Semester harus diisi', 'max_length' => 'Semester tidak valid'
            ]
        );
        $this->form_validation->set_rules(
            'waktu',
            'Waktu Kuliah',
            'required',
            [
                'required' => 'Waktu Kuliah harus diisi'
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
            $this->load->view('mahasiswa/index', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('foto')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }
            $data = [
                'nim' => $this->input->post('nim', true),
                'nama' => $this->input->post('nama', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                'jk' => $this->input->post('jk', true),
                'agama' => $this->input->post('agama', true),
                'alamat' => $this->input->post('alamat', true),
                'email' => $this->input->post('email', true),
                'telp' => $this->input->post('telp', true),
                'id_kampus' => $this->input->post('id_kampus', true),
                'id_kelas' => $this->input->post('id_kelas', true),
                'id_prodi' => $this->input->post('id_prodi', true),
                'semester' => $this->input->post('semester', true),
                'waktu' => $this->input->post('waktu', true),
                'is_active' => 1,
                'password' => password_hash($this->input->post('tanggal_lahir'), PASSWORD_DEFAULT),
                'role_id' => 2,
            ];
            $this->ModelUser->simpanMahasiswa($data);
            redirect('mahasiswa');
        }
    }




    public function hapusMahasiswa()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelUser->hapusMahasiswa($where);
        redirect('mahasiswa');
    }

    public function ubahMahasiswa()
    {
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['mahasiswa'] = $this->ModelUser->mahasiswaWhere(['id' => $this->uri->segment(3)])->result_array();
        $data['prodi'] = $this->ModelUser->getProdi()->result_array();
        $data['kelas'] = $this->ModelUser->getKelas()->result_array();
        $data['kampus'] = $this->ModelUser->getKampus()->result_array();

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
            $this->load->view('mahasiswa/ubahmahasiswa', $data);
            $this->load->view('templates/footer');
        } else {
            if ($this->upload->do_upload('foto')) {
                $image = $this->upload->data();
                $gambar = $image['file_name'];
            } else {
                $gambar = '';
            }
            $data = [
                'nim' => $this->input->post('nim', true),
                'nama' => $this->input->post('nama', true),
                'tempat_lahir' => $this->input->post('tempat_lahir', true),
                'tanggal_lahir' => $this->input->post('tanggal_lahir', true),
                'jk' => $this->input->post('jk', true),
                'agama' => $this->input->post('agama', true),
                'alamat' => $this->input->post('alamat', true),
                'email' => $this->input->post('email', true),
                'telp' => $this->input->post('telp', true),
                'id_kampus' => $this->input->post('id_kampus', true),
                'id_kelas' => $this->input->post('id_kelas', true),
                'id_prodi' => $this->input->post('id_prodi', true),
                'semester' => $this->input->post('semester', true),
                'waktu' => $this->input->post('waktu', true),
            ];
            $this->ModelUser->updateMahasiswa($data, ['id' => $this->input->post('id')]);
            redirect('mahasiswa');
        }
    }

    public function prodi()
    {
        $data['nama'] = 'Nama Prodi';
        $data['user'] = $this->ModelUser->cekData(['email' => $this->session->userdata('email')])->row_array();
        $data['prodi'] = $this->ModelUser->getProdi()->result_array();
        $this->form_validation->set_rules(
                'prodi',
                'Program',
                'required',
                [
                    'required' => 'Program Studi harus diisi'
                ]
            );
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('buku/kategori', $data);
            $this->load->view('templates/footer');
        } else {
            $data = ['kategori' => $this->input->post('kategori')];
            $this->ModelUser->simpanKategori($data);
            redirect('buku/kategori');
        }
    }
    public function hapusKategori()
    {
        $where = ['id' => $this->uri->segment(3)];
        $this->ModelUser->hapusKategori($where);
        redirect('buku/kategori');
    }
}
