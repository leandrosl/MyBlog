<?php
require_once __DIR__ . '/../db/pdoObject.php';
require_once __DIR__ . '/../db/Database.php';

$database = new Database($pdo);

if (isset($_GET['user'])) {
    $user = $database->getById('authors', $_GET['user']);

    if (is_array($user)) {
        $posts = $database->getAllWhere('posts', ['author_id' => $_GET['user']]);
    } else {
        header('Location: /');
    }

    ob_start();

    include __DIR__ . '/../views/dashboard.template.php';

    $output = ob_get_clean();

    include __DIR__ . '/../views/layout.template.php';
} else {
    header('Location: /');
}
?>