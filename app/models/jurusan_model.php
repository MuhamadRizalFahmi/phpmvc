<?php

class jurusan_model
{
    private $table = 'jurusan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAlljurusan()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getjurusanById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDatajurusan($data)
    {
        $query = "INSERT INTO jurusan
                       VALUES
                      ('', :jurusan)";

        $this->db->query($query);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataJurusan($id)
    {
        $query = "DELETE FROM jurusan WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDatajurusan()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM jurusan WHERE jurusan LIKE :keyword";
        $this->db->query($query);
        $this->db->bind(':keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
