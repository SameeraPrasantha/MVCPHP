<?php

class Config {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "test";
    private $conn;

    public function getConn() {
        if (!$this->conn) {
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        }
        return $this->conn;
    }
}

?>
