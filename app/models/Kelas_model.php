<?php

require_once __DIR__ . '/../core/Database.php';

class Kelas_model extends Database
{
    protected $table = 'kelas';
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllKelas()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getKelasById($id)
    {
        $id = intval($id);

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function addKelas($data)
    {
        $query = "INSERT INTO " . $this->table . " (kelas) VALUES (:kelas)";
        $this->db->query($query);
        $this->db->bind(':kelas', $data['kelas']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateKelas($data)
    {
        $query = "UPDATE " . $this->table . " SET kelas = :kelas WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':kelas', $data['kelas']);
        $this->db->bind(':id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteKelas($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
