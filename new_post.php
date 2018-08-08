<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        try {
            $dbConn = new PDO('mysql:host=mysql;port=3306;dbname=myblog-bd', 'root', 'root');
            foreach ($dbConn->query('SELECT * FROM post') as $row) {
                print_r($row);
            }
        } catch (PDOException $pdoException) {
            print_r("Não foi possível conectar ao banco: {$pdoException->getMessage()}");
        } finally {
            $dbConn = null;
            die();
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