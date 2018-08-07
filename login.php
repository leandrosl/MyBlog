<?php include_once('./parts/header.php'); ?>

    <div id="login-container">
        <form action="">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password">
            <div id="lower">
                <input type="checkbox"> <label for="checkbox">Continuar logado</label>
                <input type="submit" value="Entrar">
            </div>
        </form>
    </div>

<?php include_once('./parts/footer.php'); ?>