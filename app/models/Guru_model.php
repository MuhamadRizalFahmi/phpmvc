<?php

class guru_model
{
    private $table = 'guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllguru()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getguruById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataguru($data)
    {
        $query = "INSERT INTO guru
                       VALUES
                      ('', :guru)";

        $this->db->query($query);
        $this->db->bind('guru', $data['guru']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataGuru($id)
    {
        $query = "DELETE FROM guru WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataguru()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM guru WHERE guru LIKE :keyword";
        $this->db->query($query);
        $this->db->bind(':keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}
