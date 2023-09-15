<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crud_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    // Untuk create data atau menambahkan data ke database
    public function createData()
    {
        $data = array(
            'nama_depan' => $this->input->post('nama_depan'),
            'nama_belakang' => $this->input->post('nama_belakang'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'kontak' => $this->input->post('kontak'),
            'biodata' => $this->input->post('biodata')
        );
        $this->db->insert('tbl_nama', $data);
    }

    // Untuk menampilkan isi data pada database
    function getAllData()
    {
        $query = $this->db->query('select * from tbl_nama');
        return $query->result();
    }

    function getData($id)
    {
        $query = $this->db->query('select * from tbl_nama where id =' . $id);
        return $query->row();
    }


    function updateData($id)
    {
        $data = array(
            'nama_depan' => $this->input->post('nama_depan'),
            'nama_belakang' => $this->input->post('nama_belakang'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'kontak' => $this->input->post('kontak'),
            'biodata' => $this->input->post('biodata')
        );
        $this->db->where('id', $id);
        $this->db->update('tbl_nama', $data);
    }

    function deleteData($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tbl_nama');
    }
}
