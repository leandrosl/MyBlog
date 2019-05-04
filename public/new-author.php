<?php

include __DIR__ . '/../db/DatabaseConnection.php';
include __DIR__ . '/../db/DatabaseFunctions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

} else {
    ob_start();

    include __DIR__ . '/../views/new_author.template.php';

    $output = ob_get_clean();

    include __DIR__ . '/../views/layout.template.php';
}