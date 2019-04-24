<?php

require __DIR__ . '/../db/DatabaseConnection.php';
require __DIR__ . '/../db/DatabaseFunctions.php';

try {
    $authors = getAll($pdo, 'authors');
} catch (\PDOException $e) {
    echo "Erro ao acessar o banco de dados: " . $e->getMessage();
}

ob_start();

include __DIR__ . '/../views/authors.template.php';

$output = ob_get_clean();

include __DIR__ . '/../views/layout.template.php';