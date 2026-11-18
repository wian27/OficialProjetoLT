<?php
declare(strict_types=1);
require_once __DIR__ . '/app/bootstrap.php';
require_once __DIR__ . '/app/page.php';
if (isset($_SESSION['user_id']) && is_int($_SESSION['user_id'])) {
    redirect('index.php');
}
page_start('Entrar');
?>
<section class="card">
    <h1>Entrar na sua conta</h1>
    <p class="muted">Acesse a comunidade LineTime.</p>
    <?php if ($message = flash('error')): ?><p class="alert" role="alert"><?= h($message) ?></p><?php endif; ?>
    <?php if ($message = flash('success')): ?><p class="empty" role="status"><?= h($message) ?></p><?php endif; ?>
    <form class="stack" method="post" action="auth/login.php" autocomplete="on">
        <input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>">
        <label class="field" for="email"><span>E-mail</span><input id="email" name="email" type="email" maxlength="254" autocomplete="email" required></label>
        <label class="field" for="password"><span>Senha</span><input id="password" name="password" type="password" autocomplete="current-password" required></label>
        <button class="button" type="submit">Entrar</button>
    </form>
    <p>Não tem uma conta? <a href="cadastro.php">Criar conta</a></p>
</section>
<?php page_end(); ?>
