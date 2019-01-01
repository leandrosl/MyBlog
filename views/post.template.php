<div class="container">
    <?php if ($post): ?>
        <h1><?= $post['title'] ?></h1>
        <p><?= $post['post_text'] ?></p>
    <?php else: ?>
        <h1>Post não encontrado</h1>
    <?php endif; ?>
</div>