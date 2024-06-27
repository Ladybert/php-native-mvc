<?php 

require_once __DIR__ . '/../core/Database.php';

class Magang_model extends Database {

    protected $table = 'alpatech';
    protected $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllMagang() {
        $this->db->query('SELECT alpatech.*, kelas.kelas, dtp.dtp 
                        FROM alpatech 
                        JOIN kelas ON alpatech.kelas = kelas.id 
                        JOIN dtp ON alpatech.dtp= dtp.id');
        return $this->db->resultSet();
    }

    public function getMagangById($id) {
        $id = intval($id);
        $this->db->query('SELECT alpatech.*, kelas.kelas, dtp.dtp 
                        FROM alpatech 
                        JOIN kelas ON alpatech.kelas = kelas.id 
                        JOIN dtp ON alpatech.dtp = dtp.id
                        WHERE alpatech.id = :id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function addMagang($data) {
        $query = "INSERT INTO alpatech (nama, kelas, dtp, jurusan) 
                VALUES (:nama, :kelas, :dtp, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('dtp', $data['dtp']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteMagang($id) {
        $query = 'DELETE FROM ' . $this->table . ' WHERE id = :id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateMagang($data) {
        $query = "UPDATE " . $this->table . " 
                SET nama = :nama, kelas= :kelas, dtp = :dtp, jurusan = :jurusan 
                WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('dtp', $data['dtp']);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
