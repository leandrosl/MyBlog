<?php include_once('./parts/header.php'); ?>

<h3>Novo Post</h3>

<form action="">
    <label for="title">Título</label>
    <input type="text" id="title" name="title">
    <br>
    <label for="text">Texto</label>
    <textarea name="text" id="text" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Postar">
</form>

<?php include_once('./parts/footer.php'); ?>