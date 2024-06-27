<?php 
require_once '../app/core/Controller.php';
require_once '../app/models/Magang_model.php';
require_once '../app/models/Kelas_model.php';
require_once '../app/models/Dtp_model.php';

class MagangController extends Controller {
    private $magangModel;
    private $kelasModel;
    private $dtpModel;

    public function __construct() {
        $this->magangModel = new Magang_model();
        $this->kelasModel = new Kelas_model();
        $this->dtpModel = new Dtp_model();
    }

    public function index()
    {
        $this->view('magang/index', [
            'title' => 'Detail Anak Magang | PKL',
            'alpatech' => $this->magangModel->getAllMagang(),
            'kelas' => $this->kelasModel->getAllKelas(), 
            'dtp' => $this->dtpModel->getAllDtp()      
        ]);
    }

    public function detail($id)
    {
        $this->view('magang/detail', [
            'title' => 'Detail Anak Magang | PKL',
            'alpatech' => $this->magangModel->getMagangById($id),
            'dtps' => $this->dtpModel->getAllDtp(),
            'kelas' => $this->kelasModel->getAllKelas(),
        ]);
    }

    public function save()
    {
        if( $this->magangModel->addMagang ($_POST) > 0) {
                header('Location: '.  BASEURL  . '/magang/index');
                exit;
            }
    }

    public function delete($id)
    {
        if( $this->magangModel->deleteMagang ($id) > 0) {
                header('Location: '.  BASEURL  . '/magang/index');
                exit;
            }
    }

    public function update()
    {
        if( $this->magangModel->updateMagang ($_POST) > 0) {
            header('Location: '.  BASEURL  . '/magang/index');
            exit;
        }
    }
}
