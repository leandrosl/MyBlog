<div class="container">
    <br>
    <div class="card">
        <div class="card-body">
            <h3>Novo Autor</h3>
            <form action="POST">
                <div class="form-row">
                    <div class="form-group col">
                        <label for="firstname">Nome</label>
                        <input type="text" name="firstname" class="form-control">
                    </div>
                    <div class="form-group col">
                        <label for="lastname">Sobrenome</label>
                        <input type="text" name="lastname" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="username">Usuário</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group col">
                        <label for="password">Senha</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="birth_date">Data de Nascimento</label>
                        <input type="text" name="birth_date" class="form-control">
                    </div>
                    <div class="form-group col">
                        <label for="birth_country">País de Nascimento</label>
                        <input type="text" name="birth_country" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col">
                        <label for="biography">Biografia</label>
                        <textarea name="biography" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
</div>