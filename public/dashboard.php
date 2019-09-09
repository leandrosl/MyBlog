<?php

if (isset($_GET['user'])) {
    ob_start();

    include __DIR__ . '/../views/dashboard.template.php';

    $output = ob_get_clean();

    include __DIR__ . '/../views/layout.template.php';
} else {
    header('Location: /');
}

?>