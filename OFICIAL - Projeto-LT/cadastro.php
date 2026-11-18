<?php
declare(strict_types=1);
require_once __DIR__ . '/app/bootstrap.php';
require_once __DIR__ . '/app/page.php';
if (isset($_SESSION['user_id']) && is_int($_SESSION['user_id'])) {
    redirect('index.php');
}
page_start('Criar conta');
?>
<section class="card">
    <h1>Criar conta no LineTime</h1>
    <p class="muted">Use um e-mail válido e crie uma senha com 12 a 72 caracteres.</p>
    <?php if ($message = flash('error')): ?><p class="alert" role="alert"><?= h($message) ?></p><?php endif; ?>
    <form class="stack" method="post" action="auth/register.php" autocomplete="on">
        <input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>">
        <label class="field" for="name"><span>Nome</span><input id="name" name="name" type="text" maxlength="120" autocomplete="name" required></label>
        <label class="field" for="email"><span>E-mail</span><input id="email" name="email" type="email" maxlength="254" autocomplete="email" required></label>
        <label class="field" for="password"><span>Senha</span><input id="password" name="password" type="password" minlength="12" maxlength="72" autocomplete="new-password" required></label>
        <button class="button" type="submit">Criar conta</button>
    </form>
    <p>Já tem uma conta? <a href="login.php">Entrar</a></p>
</section>
<?php page_end(); ?>
