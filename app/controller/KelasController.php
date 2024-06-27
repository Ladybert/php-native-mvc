<?php

require_once '../app/core/Controller.php';
require_once '../app/models/Kelas_model.php';

class KelasController extends Controller
{
    private $kelasModel;

    public function __construct()
    {
        $this->kelasModel = new Kelas_model();
    }

    public function index()
    {
        $this->view('magang/kelas', [
            'title' => 'Daftar Kelas',
            'kelas' => $this->kelasModel->getAllKelas()
        ]);
    }

    public function save()
    {
        if ($this->kelasModel->addKelas($_POST) > 0) {
            header('Location: ' . BASEURL . '/kelas');
            exit;
        }
    }

    public function detail($id)
    {
        $this->view('magang/detailKelas', [
            'title' => 'Opsi Penanganan Kelas | PKL',
            'kelas' => $this->kelasModel->getKelasById($id)
        ]);
    }

    public function edit($id)
    {
        $this->view('magang/editKelas', [
            'title' => 'Edit Data Kelas',
            'kelas' => $this->kelasModel->getKelasById($id)
        ]);
    }

    public function update()
    {
        if ($this->kelasModel->updateKelas($_POST) > 0) {
            header('Location: ' . BASEURL . '/kelas');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->kelasModel->deleteKelas($id) > 0) {
            header('Location: ' . BASEURL . '/kelas');
            exit;
        }
    }
}
