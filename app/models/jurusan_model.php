<?php
class jurusan_model
{
    private $table = 'jurusan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllDataJurusan()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultset();
    }
    public function getJurusanById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahData()
    {
        $query = " INSERT INTO jurusan  (jurusan ) VALUES
        ( :jurusan ) ";

        $this->db->query($query);
        $this->db->bind('jurusan', $_POST['jurusan']);
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
    public function ubahDataJurusan($data)
    {
        $query = "UPDATE jurusan SET
        jurusan =:jurusan
        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('jurusan', $data['jurusan']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
?>