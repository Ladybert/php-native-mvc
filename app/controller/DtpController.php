<?php

require_once '../app/core/Controller.php';
require_once '../app/models/Dtp_model.php';

class DtpController extends Controller
{
    private $dtpModel;

    public function __construct()
    {
        $this->dtpModel = new Dtp_model();
    }

    public function index()
    {
        $this->view('magang/dtp', [
            'title' => 'Daftar DTP',
            'dtp' => $this->dtpModel->getAllDtp()
        ]);
    }

    public function save()
    {
        if ($this->dtpModel->addDtp($_POST) > 0) {
            header('Location: ' . BASEURL . '/dtp');
            exit;
        }
    }

    public function detail($id)
    {
        $this->view('magang/detailDtp', [
            'title' => 'Detail Kelas DTP | PKL',
            'dtp' => $this->dtpModel->getDtpById($id)
        ]);
    }

    public function edit($id)
    {
        $this->view('magang/editDtp', [
            'title' => 'Edit DTP',
            'dtp' => $this->dtpModel->getDtpById($id)
        ]);
    }

    public function update()
    {
        if ($this->dtpModel->updateDtp($_POST) > 0) {
            header('Location: ' . BASEURL . '/dtp');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->dtpModel->deleteDtp($id) > 0) {
            header('Location: ' . BASEURL . '/dtp');
            exit;
        }
    }
}
