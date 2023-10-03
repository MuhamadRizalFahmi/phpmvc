<?php

class jurusan extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar jurusan';
        $data['jurusan'] = $this->model('jurusan_model')->getAllJurusan();
        $this->views('templates/header', $data);
        $this->views('jurusan/index', $data);
        $this->views('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail jurusan';
        $data['jurusan'] = $this->model('jurusan_model')->getJurusanById($id);
        $this->views('templates/header', $data);
        $this->views('jurusan/detail', $data);
        $this->views('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('jurusan_model')->tambahDataJurusan($_POST) > 0) {
            header('Location:' . BASEURL . '/jurusan');
            exit;
        }
    }

    public function hapus($id)
    {
        $jurusanModel = $this->model('Jurusan_model');

        if ($jurusanModel->hapusDataJurusan($id) > 0) {
            header('Location: ' . BASEURL . '/jurusan');
            exit;
        } else {
            header('Location: ' . BASEURL . '/jurusan');
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar jurusan';
        $data['jurusan'] = $this->model('jurusan_model')->cariDataJurusan();
        $this->views('templates/header', $data);
        $this->views('jurusan/index', $data);
        $this->views('templates/footer');
    }
}
