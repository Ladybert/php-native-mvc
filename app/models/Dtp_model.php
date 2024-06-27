<?php

require_once __DIR__ . '/../core/Database.php';

class Dtp_model extends Database
{
    protected $table = 'dtp';
    protected $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllDtp()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getDtpById($id)
    {
        $id = intval($id);

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function addDtp($data)
    {
        $query = "INSERT INTO " . $this->table . " (dtp) VALUES (:dtp)";
        $this->db->query($query);
        $this->db->bind(':dtp', $data['dtp']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateDtp($data)
    {
        $query = "UPDATE " . $this->table . " SET dtp = :dtp WHERE id = :id";
        $this->db->query($query);
        $this->db->bind(':dtp', $data['dtp']);
        $this->db->bind(':id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteDtp($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
