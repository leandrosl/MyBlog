<?php

class Database
{
    private $pdo;

    function __construct($pdoObject)
    {
        $this->pdo = $pdoObject;
    }

    function getAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM $table");
        $statement->execute();

        return $statement->fetchAll();
    }

    function getById($table, $id)
    {
        $statement = $this->pdo->prepare("SELECT * FROM $table WHERE id = :id");
        $statement->bindValue('id', $id);
        $statement->execute();

        return $statement->fetch();
    }

    function getAllWhere($table, $whereFields)
    {
        $query = "SELECT * FROM {$table} WHERE ";

        foreach ($whereFields as $key => $value) {
            $query .= "{$key} = '{$value}' AND ";
        }

        $query .= '+';

        $query = str_replace(' AND +', ';', $query);

        $statement = $this->pdo->prepare($query);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    function insert($table, $fields) 
    {
        $query = "INSERT INTO $table (";

        foreach ($fields as $key => $value) {
            $query .= "{$key}, ";
        }

        $query .= ") VALUES (";

        $query = str_replace(', )', ')', $query);

        foreach ($fields as $key => $value) {
            $query .= ":{$key}, ";
        }

        $query .= ");";

        $query = str_replace(', );', ');', $query);

        $statement = $this->pdo->prepare($query);

        return $statement->execute($fields);
    }
}