<?php

require_once __DIR__ . '/../db/pdoObject.php';
require_once __DIR__ . '/../db/Database.php';

$database = new Database($pdo);

try {
    $authors = $database->getAll('authors');
} catch (\PDOException $e) {
    echo "Erro ao acessar o banco de dados: " . $e->getMessage();
}

ob_start();

include __DIR__ . '/../views/authors.template.php';

$output = ob_get_clean();

include __DIR__ . '/../views/layout.template.php';