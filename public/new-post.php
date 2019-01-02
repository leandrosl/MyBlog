<?php

include __DIR__ . '/../db/DatabaseConnection.php';
include __DIR__ . '/../db/DatabaseFunctions.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {

    } catch (PDOException $e) {

    }
    
    header("Location: index.php");
} else {
    ob_start();

    include __DIR__ . '/../views/new_post.template.php';

    $output = ob_get_clean();

    include __DIR__ . '/../views/layout.template.php';
}

?>