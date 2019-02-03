<br>
<div class="container">
    <div class="card">
        <div class="card-body">
        <h1>Todos os Posts</h1>
        <br>
        <?php foreach ($posts as $post): ?>
            <div class="card">
                <div class="card-body">
                    <a href="post.php?id=<?= $post['id'] ?>">
                        <h4><?= $post['title'] ?></h4>
                    </a>
                    <p><?= $post['post_text']?></p>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>

