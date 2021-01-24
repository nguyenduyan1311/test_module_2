<?php
namespace App\Model;

use PDO;
use PDOException;

class DBConnect
{
    protected $dsn;
    protected $user;
    protected $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=test_module_2;charset=utf8";
        $this->user = "root";
        $this->password = "Nguyenduyan123@";
    }
    public function connect()
    {
        $conn = null;
        try {
            $conn = new PDO($this->dsn,$this->user,$this->password);
            return $conn;
        } catch (PDOException $e){
            echo $e->getMessage();
        }

    }
}