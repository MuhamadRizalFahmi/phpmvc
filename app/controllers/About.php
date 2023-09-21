<?php

class About extends Controller
{
    public function index($nama = 'Rizal', $pekerjaan = 'Gamer', $umur = 17)
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->views('templates/header', $data);
        $this->views('about/index', $data);
        $this->views('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->views('templates/header', $data);
        $this->views('about/page');
        $this->views('templates/footer');
    }
}
