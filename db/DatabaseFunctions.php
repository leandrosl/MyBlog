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