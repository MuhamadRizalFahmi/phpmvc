<?php

class Kelas extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Kelas';
        $data['kelas'] = $this->model('Kelas_model')->getAllKelas();
        $this->views('templates/header', $data);
        $this->views('kelas/index', $data);
        $this->views('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Kelas';
        $data['kelas'] = $this->model('Kelas_model')->getKelasById($id);
        $this->views('templates/header', $data);
        $this->views('kelas/detail', $data);
        $this->views('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Kelas_model')->tambahDataKelas($_POST) > 0) {
            header('Location:' . BASEURL . '/kelas');
            exit;
        }
    }

    public function hapus($id)
    {
        $kelasModel = $this->model('Kelas_model');

        if ($kelasModel->hapusDataKelas($id) > 0) {
            header('Location: ' . BASEURL . '/kelas');
            exit;
        } else {
            header('Location: ' . BASEURL . '/kelas');
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Kelas';
        $data['kelas'] = $this->model('Kelas_model')->cariDataKelas();
        $this->views('templates/header', $data);
        $this->views('kelas/index', $data);
        $this->views('templates/footer');
    }
}
