<?php

require_once '/etc/scandiweb-junior-developer-test-task/config.php';

class Database
{
    private $host = HOST;
    private $db_name = DB_NAME;
    private $user = USER;
    private $pass = PASS;
    private $conn;

    // DB Connect
    public function connect()
    {
        try {
            $this->conn = new \PDO(
                "mysql:host=$this->host;dbname=$this->db_name",
                $this->user,
                $this->pass
            );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }

        return $this->conn;
    }
}
