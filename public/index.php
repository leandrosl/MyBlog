<?php 
require_once __DIR__ . '/../db/pdoObject.php';
require_once __DIR__ . '/../db/Database.php';

$database = new Database($pdo);

try {
    $posts = $database->getAll('posts');
} catch (PDOException $e) {
    print("Erro no banco:" . $e->getMessage());
}    

ob_start();

include __DIR__ . '/../views/index.template.php';

$output = ob_get_clean();

include __DIR__ . '/../views/layout.template.php';
?>