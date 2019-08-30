<?php 
    include __DIR__ . '/../db/DatabaseConnection.php';
    include __DIR__ . '/../db/DatabaseFunctions.php';

    try {
        $posts = getAll($pdo, 'posts');
    } catch (PDOException $e) {
        print("Erro no banco:" . $e->getMessage());
    }    

    ob_start();

    include __DIR__ . '/../views/index.template.php';

    $output = ob_get_clean();

    include __DIR__ . '/../views/layout.template.php';
?>