<?php

class Mahasiswa extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->views('templates/header', $data);
        $this->views('mahasiswa/index', $data);
        $this->views('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getMahasiswaById($id);
        $this->views('templates/header', $data);
        $this->views('mahasiswa/detail', $data);
        $this->views('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Mahasiswa_model')->tambahDataMahasiswa($_POST) > 0) {
            header('Location:' . BASEURL . '/mahasiswa');
            exit;
        }
    }

    public function hapus($id)
    {
        $mahasiswaModel = $this->model('Mahasiswa_model');

        if ($mahasiswaModel->hapusDataMahasiswa($id) > 0) {
            header('Location: ' . BASEURL . '/mahasiswa');
            exit;
        } else {
            header('Location: ' . BASEURL . '/mahasiswa');
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->cariDataMahasiswa();
        $this->views('templates/header', $data);
        $this->views('mahasiswa/index', $data);
        $this->views('templates/footer');
    }
}
