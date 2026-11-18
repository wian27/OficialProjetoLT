<?php
declare(strict_types=1);
require_once __DIR__ . '/app/bootstrap.php';
require_once __DIR__ . '/app/page.php';
require_auth();
$posts = [];
$ready = true;
try {
    $stmt = db()->prepare('SELECT content, created_at FROM posts WHERE user_id = :user_id ORDER BY created_at DESC LIMIT 50');
    $stmt->execute(['user_id' => $_SESSION['user_id']]);
    $posts = $stmt->fetchAll();
} catch (Throwable $exception) {
    error_log('LineTime profile database error: ' . $exception->getMessage());
    $ready = false;
}
page_start('Meu perfil');
?>
<section class="card">
    <h1>Meu perfil</h1>
    <p><strong><?= h((string)($_SESSION['user_name'] ?? '')) ?></strong></p>
    <p class="muted">A edição de perfil será adicionada em uma próxima etapa.</p>
</section>
<section aria-label="Minhas publicações">
    <h2>Minhas publicações</h2>
    <?php if (!$ready): ?><div class="empty">O banco de dados ainda não está disponível.</div>
    <?php elseif (!$posts): ?><div class="empty">Você ainda não publicou nada. <a href="index.php">Criar publicação</a></div>
    <?php else: foreach ($posts as $post): ?>
        <article class="card"><p class="meta"><?= h((string)$post['created_at']) ?></p><div class="post"><?= h((string)$post['content']) ?></div></article>
    <?php endforeach; endif; ?>
</section>
<?php page_end(); ?>
