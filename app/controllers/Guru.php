<?php

class guru extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar guru';
        $data['guru'] = $this->model('guru_model')->getAllguru();
        $this->views('templates/header', $data);
        $this->views('guru/index', $data);
        $this->views('templates/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail guru';
        $data['guru'] = $this->model('guru_model')->getguruById($id);
        $this->views('templates/header', $data);
        $this->views('guru/detail', $data);
        $this->views('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('guru_model')->tambahDataguru($_POST) > 0) {
            header('Location:' . BASEURL . '/guru');
            exit;
        }
    }

    public function hapus($id)
    {
        $guruModel = $this->model('Guru_model');

        if ($guruModel->hapusDataGuru($id) > 0) {
            header('Location: ' . BASEURL . '/guru');
            exit;
        } else {
            header('Location: ' . BASEURL . '/guru');
        }
    }

    public function cari()
    {
        $data['judul'] = 'Daftar guru';
        $data['guru'] = $this->model('guru_model')->cariDataguru();
        $this->views('templates/header', $data);
        $this->views('guru/index', $data);
        $this->views('templates/footer');
    }
}
