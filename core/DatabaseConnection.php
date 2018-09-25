<?php

namespace MyBlog\Core;

class DatabaseConnection
{
    private $dbType = 'mysql';
    private $hostname = 'mysql';
    private $username = 'root';
    private $password = 'root';
    private $dbName = 'myblog-bd';
    
    public $db = null;

    function openConnection() 
    {
        if (!$this->db) {
            try {
                $this->db = new PDO("{$this->dbType}:host={$this->hostname};dbname={$this->dbName}", 
                    $this->username, $this->password);
            }
            catch (PDOException $e) {
                print_r($e->getMessage());
            }
        }

        return $this->db;
    }

    function closeConnection() 
    {
        $this->db = null;
    }
}