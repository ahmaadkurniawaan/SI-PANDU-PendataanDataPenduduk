<?php

class Bantuan_model extends CI_Model
{

    public function getAllBantuan()
    {

        return $this->db->get('bantuan')->result_array();
    }
    public function getAllById($id_bantuan)
    {
        return $this->db->get_where('bantuan', array('id_bantuan' => $id_bantuan))->row();
    }
    public function tambahDataBantuan()
    {

        $nik                   =  $this->input->post('nik', true);
        $nama                  =  $this->input->post('nama', true);
        $jenis_kelamin         =  $this->input->post('jenis_kelamin', true);
        $umur                  =  $this->input->post('umur', true);
        $jenis_bantuan         =  $this->input->post('jenis_bantuan', true);
        $status                =  $this->input->post('status', true);
        $jumlah                =  $this->input->post('jumlah', true);

        $data = [

            "nik"              => $nik,
            "nama"             => $nama,
            "jenis_kelamin"    => $jenis_kelamin,
            "umur"             => $umur,
            "jenis_bantuan"    => $jenis_bantuan,
            "status"           => $status,
            "jumlah"           => $jumlah

        ];

        return $this->db->insert('bantuan', $data);
    }
    public function editDataBantuan($id_bantuan)
    {

        $nik                   =  $this->input->post('nik', true);
        $nama                  =  $this->input->post('nama', true);
        $jenis_kelamin         =  $this->input->post('jenis_kelamin', true);
        $umur                  =  $this->input->post('umur', true);
        $jenis_bantuan         =  $this->input->post('jenis_bantuan', true);
        $status                =  $this->input->post('status', true);
        $jumlah                =  $this->input->post('jumlah', true);

        $data = [

            "nik"              => $nik,
            "nama"             => $nama,
            "jenis_kelamin"    => $jenis_kelamin,
            "umur"             => $umur,
            "jenis_bantuan"    => $jenis_bantuan,
            "status"           => $status,
            "jumlah"           => $jumlah

        ];

        $this->db->where('id_bantuan', $id_bantuan);
        $this->db->update('bantuan', $data);
    }



    public function hapusDataBantuan($id_bantuan)
    {
        $this->db->where('id_bantuan', $id_bantuan);
        $this->db->delete('bantuan');
    }
}
