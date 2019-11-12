<?php
include_once 'ConnectDB.php';
class Mahasiswa
{
    var $nama;
    var $nim;
    var $kelas;
    private $conn;

    function __construct()
    {
        $this->conn = new ConnectDB();
    }

    function setNim($nim)
    {
        $this->nim = $nim;
    }

    function getNama()
    {
        return $this->nama;
    }

    function setNama($nama)
    {
        $this->nama = $nama;
    }

    function setKelas($kelas)
    {
        $this->kelas = $kelas;
    }

    function getNim()
    {
        return $this->nim;
    }

    function getKelas()
    {
        return $this->kelas;
    }

    public function insert()
    {
        $query = "INSERT INTO `mahasiswa`
        (`nim`, `nama`, `kelas`)
        VALUES (
            '$this->nim',
            '$this->nama',
            '$this->kelas'
        )";
        $success = mysqli_query($this->conn->getConnection(), $query)
         or die (mysqli_error($this->conn->getConnection()));
    }

    public function selectAll()
    {
        $query = "SELECT * FROM mahasiswa";
        $success = mysqli_query($this->conn->getConnection(), $query)
                or die (mysqli_error($this->conn->getConnection()));
        $data = [];
        while ($row = mysqli_fetch_array($success)) {
            array_push($data, $row);
        }
        return $data;
    }

    function getData()
    {
        $conn = new ConnectDB();
    }
}
