<?php
class data_guru_model
{
    private $table = 'data_guru';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllDataGuru()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultset();
    }
    public function getGuruById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahData($data)
    {
        $query = " INSERT INTO data_guru VALUES
        ('', :nama, :jenis_kelamin, :alamat ) ";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataGuru($id)
    {
        $query = "DELETE FROM data_guru WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function ubahDataGuru($data)
    {
        $query = "UPDATE data_guru SET
        nama = :nama,
        jenis_kelamin = :jenis_kelamin,
        alamat = :alamat
        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
?>