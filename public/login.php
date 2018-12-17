<?php
    ob_start();

    include __DIR__ . '/../views/login.template.php';

    $output = ob_get_clean();

    include __DIR__ . '/../views/layout.template.php';
?>