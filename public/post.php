<?php

include __DIR__ . '/../db/DatabaseConnection.php';
include __DIR__ . '/../db/DatabaseFunctions.php';

if (isset($_GET['id'])) {
    try {
        $post = getById($pdo, 'posts', $_GET['id']);
    } catch (PDOException $e) {
        print("Erro no banco: " . $e->getMessage());
    }
}

ob_start();

include __DIR__ . '/../views/post.template.php';

$output = ob_get_clean();

include __DIR__ . '/../views/layout.template.php';

?>