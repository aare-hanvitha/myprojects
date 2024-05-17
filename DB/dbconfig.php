<?php

class Dbconfig {

    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname  = 'myprojects';
    private $conn;

    public function getConnection() {
        $this->conn = new mysqli($this->host,$this->username,$this->password,$this->dbname);
        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        return $this->conn;
    }

}

// class usage
$database = new Dbconfig();
$conn = $database->getConnection();



