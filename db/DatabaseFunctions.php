<?php

function getAll($pdo, $table)
{
    $statement = $pdo->prepare("SELECT * FROM $table");
    $statement->execute();

    return $statement->fetchAll();
}

function getById($pdo, $table, $id)
{
    $statement = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
    $statement->bindValue('id', $id);
    $statement->execute();

    return $statement->fetch();
}

function getAllWhere($pdo, $table, $whereFields)
{
    $query = "SELECT * FROM {$table} WHERE ";

    foreach ($whereFields as $key => $value) {
        $query .= "{$key} = {$value} AND ";
    }

    $query = str_replace(' AND ', ';', $query);

    $statement = $pdo->prepare($query);
    $statement->execute();

    return $statement->fetch();
}

function insert($pdo, $table, $fields) 
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

    $statement = $pdo->prepare($query);

    return $statement->execute($fields);
}