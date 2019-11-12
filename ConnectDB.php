<?php
class ConnectDB
{
    private $db_host;
    private $db_username;
    private $db_password;
    private $db_name;
    
    function __construct()
    {
        $this->db_host = "localhost";
        $this->db_username = "root";
        $this->db_password = "";
        $this->db_name = "universitas_telyu";
    }

    function getConnection()
    {
        $conn = mysqli_connect(
            $this->db_host,
            $this->db_username,
            $this->db_password,
            $this->db_name
        );
        if (mysqli_connect_errno()){
            echo "gagal connect mysql : " . mysqli_connect_error();
            return null;
        }
        return $conn;
    }
}
