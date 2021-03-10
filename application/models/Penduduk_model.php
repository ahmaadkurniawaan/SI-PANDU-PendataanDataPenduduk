<?php

class Penduduk_model extends CI_Model
{

    public function getAllPenduduk()
    {
        return $this->db->get('penduduk')->result_array();
    }

    public function tambahDataPenduduk()
    {

        $nama                 =  $this->input->post('nama', true);
        $alamat               =  $this->input->post('alamat', true);
        $no_ktp               =  $this->input->post('no_ktp', true);
        $jenis_kelamin        =  $this->input->post('jenis_kelamin');

        $data = [

            "nama"              => $nama,
            "alamat"            => $alamat,
            "no_ktp"            => $no_ktp,
            "jenis_kelamin"     => $jenis_kelamin,

        ];

        return $this->db->insert('penduduk', $data);
    }
    public function editDataPenduduk($id)
    {

        $nama                 =  $this->input->post('nama', true);
        $alamat               =  $this->input->post('alamat', true);
        $no_ktp               =  $this->input->post('no_ktp', true);
        $jenis_kelamin        =  $this->input->post('jenis_kelamin');

        $data = [

            "nama"              => $nama,
            "alamat"            => $alamat,
            "no_ktp"            => $no_ktp,
            "jenis_kelamin"     => $jenis_kelamin,

        ];

        // $this->db->where('id', $this->input->post('id'));
        $this->db->where('id', $id);
        $this->db->update('penduduk', $data);
    }

    public function getAllById($id)
    {
        return $this->db->get_where('penduduk', array('id' => $id))->row();
    }

    public function hapusDataPenduduk($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('penduduk');
    }
}
