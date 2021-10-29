<?php

class Mahasiswa_model
{
    private $table = 'tbl_mhs';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getMahasiswaById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMahasiswa($data)
    {
        $query = "INSERT INTO  tbl_mhs
                    VALUES
                    ('' , :nim, :nama , :jk, :alamat, :kota, :email, :foto)";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('email', $data['email']);


        $foto = $_FILES['foto']['name'];
        $file_foto = $_FILES['foto']['tmp_name'];
        move_uploaded_file($file_foto, 'C:\xampp\htdocs\phpcrud\public\img/' . $foto,);
        $this->db->bind('foto', $foto);


        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataMahasiswa($id)
    {
        $query = "DELETE FROM tbl_mhs WHERE id=:id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataMahasiswa($data)
    {
        $query = "UPDATE tbl_mhs SET
                    nim = :nim,
                    namamhs = :nama,
                    jk = :jk,
                    alamat = :alamat,
                    kota = :kota,
                    email = :email,
                    foto = :foto
                    WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $data['id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nim', $data['nim']);
        $this->db->bind('jk', $data['jk']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('kota', $data['kota']);
        $this->db->bind('email', $data['email']);

        $foto = $_FILES['foto']['name'];
        $file_foto = $_FILES['foto']['tmp_name'];
        move_uploaded_file($file_foto, 'C:\xampp\htdocs\phpmvc - Copy\public\img/' . $foto,);
        $this->db->bind('foto', $foto);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cariDataMahasiswa()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM tbl_mhs WHERE namamhs LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");

        return $this->db->resultSet();
    }
}
