<?php
require_once __DIR__ . '/../db/pdoObject.php';
require_once __DIR__ . '/../db/Database.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $database = new Database($pdo);

    try {
        $user = $database->getAllWhere('authors', [
            'username' => $_POST["username"],
            'password' => $_POST["password"]
        ]);

        if (is_array($user) && count($user) > 0) {
            sleep(5);
            header('Location: login.php');
        } else {
            header('Location: login.php');
        }
    } catch (PDOException $e) {
        print("Erro no banco: {$e->getMessage()}");
    }
} else {
    ob_start();

    include __DIR__ . '/../views/login.template.php';

    $output = ob_get_clean();

    include __DIR__ . '/../views/layout.template.php';
}
?>