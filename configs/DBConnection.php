<?php

class DBConnection{
    private $hostname = 'localhost';
    private $user = "root";
    private $pass = '';
    private $db = 'btth01_cse485';
    private $conn=null;

    public function construct(){
         try {
            $this->conn = new mysqli($this->hostname,$this->user,$this->pass,$this->db);
        } catch (PDOException $e) {
            echo $e->getMessage('Kết nối thất bại');
        }
    }

    public function getConnection(){
        return $this->conn;
    }


}