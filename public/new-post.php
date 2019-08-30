<?php

include __DIR__ . '/../db/DatabaseConnection.php';
include __DIR__ . '/../db/DatabaseFunctions.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $fields = [
            'author_id' => '1',
            'title' => $_POST['title'],
            'post_text' => $_POST['post-text'],
        ];

        $isInsert = insert($pdo, 'posts', $fields);

        if ($isInsert) {
            header("Location: /");
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
} else {
    ob_start();

    include __DIR__ . '/../views/new_post.template.php';

    $output = ob_get_clean();

    include __DIR__ . '/../views/layout.template.php';
}

?>