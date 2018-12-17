<?php 

    ob_start();

    include __DIR__ . '/../views/index.template.php';

    $outout = ob_get_clean();

    include __DIR__ . '/../views/layout.template.php';
?>