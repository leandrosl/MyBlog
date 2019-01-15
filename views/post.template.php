<br>
<div class="container">
    <?php if ($post): ?>
        <div class="card">
            <div class="card-body">
                <h1><?= $post['title'] ?></h1>
                <p><?= $post['post_text'] ?></p>
            </div>
        </div>
    <?php else: ?>
        <h1>Post não encontrado</h1>
    <?php endif; ?>
</div>