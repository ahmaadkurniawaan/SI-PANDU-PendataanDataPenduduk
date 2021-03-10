<?php

class penduduk extends CI_Controller
{
 
    // Lodad model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Penduduk_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul']  = 'sipandu - Penduduk';
        $data['penduduk'] = $this->Penduduk_model->getAllPenduduk();
        $this->load->view('templates/header', $data);
        $this->load->view('penduduk/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() 
    {
        $data['judul']  = 'sipandu - Tambah ';

        //Rule form validate

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penduduk/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Penduduk_model->tambahDataPenduduk();
            $this->session->set_flashdata('message', ' <div class="row mt-3">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data penduduk <strong>berhasil</strong> Ditambahkan
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>');
            redirect('penduduk');
        }
    }

    public function edit($id)
    {
        $data['judul']  = 'sipandu - Edit ';
        $data['detail'] = $this->Penduduk_model->getAllById($id);
        //Rule form validate

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('no_ktp', 'Nomor KTP', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('penduduk/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Penduduk_model->editDataPenduduk($id);
            $this->session->set_flashdata('message', ' <div class="row mt-3">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data penduduk <strong>berhasil</strong> Diedit
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>');
            redirect('penduduk');
        }
    } 

    public function detail($id)
    {
        $data['judul']  = 'sipandu - Detail';
        $data['detail'] = $this->Penduduk_model->getAllById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('penduduk/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id)
    {
        $this->Penduduk_model->hapusDataPenduduk($id);
        $this->session->set_flashdata('message', ' <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data penduduk <strong>berhasil</strong> Dihapus
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>');
        redirect('penduduk');
    }
}
