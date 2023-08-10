<?php
class Pesanan_model
{
    // properties
    private $table = 'pesanan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // get all pesanan
    public function getAllPesanan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    // get pesanan by id
    public function getPesananById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // get all pesanan sorted
    public function getAllPesananSorted()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC');
        return $this->db->resultSet();
    }
}
