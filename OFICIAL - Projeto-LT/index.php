<?php
declare(strict_types=1);
require_once __DIR__ . '/app/bootstrap.php';
require_once __DIR__ . '/app/page.php';
require_auth();

$posts = [];
$databaseReady = true;
try {
    $stmt = db()->query('SELECT posts.id, posts.content, posts.created_at, users.name FROM posts JOIN users ON users.id = posts.user_id ORDER BY posts.created_at DESC LIMIT 50');
    $posts = $stmt->fetchAll();
} catch (Throwable $exception) {
    error_log('LineTime feed database error: ' . $exception->getMessage());
    $databaseReady = false;
}

page_start('Início');
?>
<section class="card">
    <h1>Olá, <?= h((string)($_SESSION['user_name'] ?? '')) ?>.</h1>
    <p class="muted">Compartilhe uma atualização com a comunidade LineTime.</p>
    <?php if ($message = flash('error')): ?><p class="alert" role="alert"><?= h($message) ?></p><?php endif; ?>
    <?php if (!$databaseReady): ?>
        <p class="alert" role="alert">O banco ainda não está configurado ou disponível. Siga o README para conectar o banco antes de usar o feed.</p>
    <?php else: ?>
        <form class="stack" method="post" action="actions/create-post.php">
            <input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>">
            <label class="field" for="content"><span>Nova publicação</span><textarea id="content" name="content" maxlength="2000" required placeholder="O que você está pensando?"></textarea></label>
            <div><button class="button" type="submit">Publicar</button></div>
        </form>
    <?php endif; ?>
</section>

<section aria-label="Publicações recentes">
    <h2>Publicações recentes</h2>
    <?php if (!$databaseReady): ?>
        <div class="empty">As publicações serão exibidas depois que o banco de dados for conectado.</div>
    <?php elseif (!$posts): ?>
        <div class="empty">Ainda não há publicações. Seja a primeira pessoa a compartilhar algo.</div>
    <?php else: ?>
        <?php foreach ($posts as $post): ?>
            <article class="card">
                <p class="meta"><?= h((string)$post['name']) ?> · <?= h((string)$post['created_at']) ?></p>
                <div class="post"><?= h((string)$post['content']) ?></div>
            </article>
        <?php endforeach; ?>
    <?php endif; ?>
</section>
<?php page_end(); ?>
