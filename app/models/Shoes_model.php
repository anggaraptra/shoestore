<?php

class Shoes_model
{
    private $table = 'shoes';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getLatestShoes()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC LIMIT 5');
        return $this->db->resultSet();
    }

    public function getAllShoesSorted()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' ORDER BY id DESC');
        return $this->db->resultSet();
    }

    public function getAllShoes()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getShoesById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    // get sneakers
    public function getSneakers()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kategori=:kategori');
        $this->db->bind('kategori', 'Sneakers');
        return $this->db->resultSet();
    }

    // get oxfords
    public function getOxfords()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kategori=:kategori');
        $this->db->bind('kategori', 'Oxfords');
        return $this->db->resultSet();
    }

    // get loafers
    public function getLoafers()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kategori=:kategori');
        $this->db->bind('kategori', 'Loafers');
        return $this->db->resultSet();
    }

    // get classic canvas
    public function getClassicCanvas()
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE kategori=:kategori');
        $this->db->bind('kategori', 'Classic Canvas');
        return $this->db->resultSet();
    }

    // add shoes data
    public function tambahShoes($data)
    {
        $query = "INSERT INTO " . $this->table . " VALUES (null, :nama_shoes, :stok, :kategori, :harga, :gambar)";

        $this->db->query($query);
        $this->db->bind('nama_shoes', htmlspecialchars($data['shoesName']));
        $this->db->bind('stok', htmlspecialchars($data['stock']));
        $this->db->bind('kategori', $data['categories']);
        $this->db->bind('harga', htmlspecialchars($data['price']));

        $gambar = upload();
        if (!$gambar) {
            return false;
        }

        $this->db->bind('gambar', $gambar);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // edit shoes data
    public function editShoes($data)
    {
        $query = "UPDATE " . $this->table . " SET nama_shoes=:nama_shoes, stok=:stok, kategori=:kategori, harga=:harga, gambar=:gambar WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('nama_shoes', htmlspecialchars($data['shoesName']));
        $this->db->bind('stok', htmlspecialchars($data['stock']));
        $this->db->bind('kategori', $data['categories']);
        $this->db->bind('harga', htmlspecialchars($data['price']));

        if ($_FILES['gambar']['error'] === 4) {
            $pict = $this->db->bind('gambar', $data['old-pict']);
        } else {
            $pict = upload();
        }

        $this->db->bind('gambar', $pict);

        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // delete shoes data
    public function deleteShoes($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE id=:id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    // search shoes
    public function cariShoes()
    {
        $keyword = $_POST['keyword'];
        $this->db->query("SELECT * FROM " . $this->table . " WHERE nama_shoes LIKE :keyword OR kategori LIKE :keyword");
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
