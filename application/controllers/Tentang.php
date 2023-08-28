<?php

class tentang extends CI_Controller
{

    public function index()
    {
        $data['judul']  = 'sipandu - Tentang';
        $this->load->view('templates/header', $data);
        $this->load->view('tentang/index');
        $this->load->view('templates/footer');
    }
}
