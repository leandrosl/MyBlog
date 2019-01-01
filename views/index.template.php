<div class="container">
    <h1>Home</h1>

    <?php foreach ($posts as $post): ?>
        <hr>
        <h4><?= $post['title'] ?></h4>
        <p><?= $post['post_text']?></p>
    <?php endforeach; ?>
</div>

