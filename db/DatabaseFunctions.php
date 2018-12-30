<?php

function getAll($pdo, $table)
{
    $statement = $pdo->prepare("SELECT * FROM $table");
    $statement->execute();

    return $statement->fetchAll();
}