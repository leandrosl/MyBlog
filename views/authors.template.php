<br>
<div class="container">
    <div class="card">
        <div class="card-body">
            <h1>Todos os autores</h1><br>
            <?php foreach ($authors as $author): ?>
                <div class="card">
                    <div class="card-body">
                        <a href="#!">
                            <h4><?= $author['firstname'] .' '. $author['lastname'] ?></h4>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
