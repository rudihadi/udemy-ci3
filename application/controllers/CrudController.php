<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CrudController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Crud_model');
    }

    public function index()
    {
        // $data adalah variabel yang dibuat sebagai penampung data dari database
        $data['result'] = $this->Crud_model->getAllData();
        $this->load->view('CrudView', $data);
    }

    // Memanggil createData
    public function create()
    {
        $this->Crud_model->createData();
        redirect("CrudController");
    }

    // Edit data
    public function edit($id)
    {
        $data['row'] = $this->Crud_model->getData($id);
        $this->load->view('CrudEdit', $data);
    }

    // Update data
    public function update($id)
    {
        $this->Crud_model->updateData($id);
        redirect("CrudController");
    }

    // Delete Data
    public function delete($id)
    {
        $this->Crud_model->deleteData($id);
        redirect("CrudController");
    }
}
