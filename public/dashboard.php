<?php

include __DIR__ . '/../db/DatabaseConnection.php';
include __DIR__ . '/../db/DatabaseFunctions.php';

if (isset($_GET['user'])) {
    $user = getById($pdo, 'authors', $_GET['user']);

    if (is_array($user)) {

    } else {
        header('Location: /');
    }

    ob_start();

    include __DIR__ . '/../views/dashboard.template.php';

    $output = ob_get_clean();

    include __DIR__ . '/../views/layout.template.php';
} else {
    header('Location: /');
}

?>