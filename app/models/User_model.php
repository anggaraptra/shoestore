<?php

class User_model
{
    // properties
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // get user by id
    public function getAdminById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // get all user
    public function getAllAdmin()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
