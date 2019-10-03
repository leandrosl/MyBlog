<?php
require_once __DIR__ . '/../db/pdoObject.php';
require_once __DIR__ . '/../db/Database.php';

$database = new Database($pdo);

if (isset($_GET['id'])) {
    try {
        $post = $database->getById('posts', $_GET['id']);
    } catch (PDOException $e) {
        print("Erro no banco: " . $e->getMessage());
    }
}

ob_start();

include __DIR__ . '/../views/post.template.php';

$output = ob_get_clean();

include __DIR__ . '/../views/layout.template.php';
?>