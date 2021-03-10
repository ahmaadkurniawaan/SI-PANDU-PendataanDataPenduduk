<?php

class Informasi_model extends CI_Model
{

    public function getAllInformasi()
    {

        return $this->db->get('informasi')->result_array();
    }
    public function getAllById($id_informasi)
    {
        return $this->db->get_where('informasi', array('id_informasi' => $id_informasi))->row();
    }
    public function tambahDataInformasi()
    {

        $judul                   =  $this->input->post('judul', true);
        $detail                  =  $this->input->post('detail', true);

        $data = [

            "judul"              => $judul,
            "detail"             => $detail,
            "tgl_upload"         => date('Y-m-d')

        ];

        return $this->db->insert('informasi', $data);
    }
    public function editDataInformasi($id_informasi)
    {

        $judul                   =  $this->input->post('judul', true);
        $detail                  =  $this->input->post('detail', true);

        $data = [

            "judul"              => $judul,
            "detail"             => $detail,
            "tgl_upload"         => date('Y-m-d')

        ];

        $this->db->where('id_informasi', $id_informasi);
        $this->db->update('informasi', $data);
    }



    public function hapusDataInformasi($id_informasi)
    {
        $this->db->where('id_informasi', $id_informasi);
        $this->db->delete('informasi');
    }
}
