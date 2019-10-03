<br>
<div class="container">
    <?php if (count($posts) > 0): ?>
    <div class="row">
        <?php foreach ($posts as $post): ?>
        <div class="card border-primary mb-3">
            <div class="card-header">Header</div>
            <div class="card-body text-primary">
                <h5 class="card-title">
                    <?= $post->title ?>
                </h5>
                <p class="card-text"></p>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <?php else: ?> 
        <div class="jumbotron">
        <h1 class="display-4">Hello, world!</h1>
        <p class="lead"></p>
        <hr class="my-4">
        <p>Você ainda não escreveu nenhum post</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Escrever um Post</a>
        </div>
    <?php endif; ?>
</div>