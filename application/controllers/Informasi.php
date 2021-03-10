<?php

class informasi extends CI_Controller
{

    // Lodad model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Informasi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul']  = 'sipendu - Informasi';
        $data['informasi'] = $this->Informasi_model->getAllInformasi();
        $this->load->view('templates/header', $data);
        $this->load->view('informasi/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul']  = 'sipendu - Tambah ';

        //Rule form validate

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('detail', 'Detail', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('informasi/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Informasi_model->tambahDataInformasi();
            $this->session->set_flashdata('message', ' <div class="row mt-3">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Informasi <strong>berhasil</strong> Ditambahkan
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>');
            redirect('informasi');
        }
    }

    public function edit($id_informasi)
    {
        $data['judul']  = 'sipendu - Edit ';
        $data['detail'] = $this->Informasi_model->getAllById($id_informasi);
        //Rule form validate

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('detail', 'Detail', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('informasi/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Informasi_model->editDataInformasi($id_informasi);
            $this->session->set_flashdata('message', ' <div class="row mt-3">
                <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data Informasi <strong>berhasil</strong> Diedit
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>');
            redirect('informasi');
        }
    }

    public function detail($id_informasi)
    {
        $data['judul']  = 'sipendu - Detail';
        $data['detail'] = $this->Informasi_model->getAllById($id_informasi);
        $this->load->view('templates/header', $data);
        $this->load->view('informasi/detail', $data);
        $this->load->view('templates/footer');
    }

    public function hapus($id_informasi)
    {
        $this->Informasi_model->hapusDataInformasi($id_informasi);
        $this->session->set_flashdata('message', ' <div class="row mt-3">
            <div class="col-md-12">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Informasi <strong>berhasil</strong> Dihapus
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>');
        redirect('informasi');
    }
}
