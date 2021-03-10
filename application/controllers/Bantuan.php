<?php

class Bantuan extends CI_Controller
{

    // Lodad model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Bantuan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul']  = 'sipendu - Dana Bantuan';
        $data['bantuan'] = $this->Bantuan_model->getAllBantuan();
        $this->load->view('templates/header', $data);
        $this->load->view('bantuan/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['bantuan'] = $this->Bantuan_model->getAllBantuan();
        $data['judul']  = 'sipendu - Tambah ';

        //Rule form validate

        $this->form_validation->set_rules('nik', 'Nomor Induk Penduduk', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin');
        $this->form_validation->set_rules('umur', 'umur', 'required');
        $this->form_validation->set_rules('jenis_bantuan', 'Jenis Bantuan');
        $this->form_validation->set_rules('status', 'Status');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('bantuan/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Bantuan_model->tambahDataBantuan();
            $this->session->set_flashdata('message', ' <div class="row mt-3">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Bantuan <strong>berhasil</strong> Ditambahkan
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>');
            redirect('bantuan');
        }
    }

    public function edit($id_bantuan)
    {
        $data['judul']  = 'sipendu - Edit ';
        $data['detail'] = $this->Bantuan_model->getAllById($id_bantuan);
        //Rule form validate

        $this->form_validation->set_rules('nik', 'Nomor Induk Penduduk', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin');
        $this->form_validation->set_rules('umur', 'umur', 'required');
        $this->form_validation->set_rules('jenis_bantuan', 'Jenis Bantuan');
        $this->form_validation->set_rules('status', 'Status');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('bantuan/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Bantuan_model->editDataBantuan($id_bantuan);
            $this->session->set_flashdata('message', ' <div class="row mt-3">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Bantuan <strong>berhasil</strong> Diedit
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>');
            redirect('bantuan');
        }
    }

    public function detail($id_bantuan)
    {
        $data['judul']  = 'sipendu - Detail';
        $data['detail'] = $this->Bantuan_model->getAllById($id_bantuan);
        $this->load->view('templates/header', $data);
        $this->load->view('bantuan/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id_bantuan)
    {
        $this->Bantuan_model->hapusDataBantuan($id_bantuan);
        $this->session->set_flashdata('message', ' <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Bantuan <strong>berhasil</strong> Dihapus
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>');
        redirect('bantuan');
    }
}
