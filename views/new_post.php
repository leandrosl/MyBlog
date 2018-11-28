<?php
require_once('./DatabaseConnection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $conn = new DatabaseConnection();
        $db = $conn->openConnection();
        // Fazer inserção no DB
    } catch (PDOException $pdoException) {
        print_r("Não foi possível conectar ao banco: {$pdoException->getMessage()}");
    } finally {
        $conn->closeConnection();
    }
}
?>


<?php include_once('./parts/header.php'); ?>

<h3>Novo Post</h3>

<form method="POST">
    <label for="title">Título</label>
    <input type="text" id="title" name="title">
    <br>
    <label for="text">Texto</label>
    <textarea name="text" id="text" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Postar">
</form>

<?php include_once('./parts/footer.php'); ?>