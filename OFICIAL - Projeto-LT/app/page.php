<?php
declare(strict_types=1);

function page_start(string $title): void
{
    ?>
    <!doctype html>
    <html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="referrer" content="strict-origin-when-cross-origin">
        <title><?= h($title) ?> · LineTime</title>
        <link rel="stylesheet" href="assets/app.css">
    </head>
    <body>
    <header class="topbar">
        <a class="brand" href="index.php">Line<span>T</span>ime</a>
        <?php if (isset($_SESSION['user_id'])): ?>
            <nav aria-label="Navegação principal">
                <a href="index.php">Início</a>
                <a href="perfil.php">Meu perfil</a>
                <a href="mensagens.php">Mensagens</a>
                <form class="inline-form" method="post" action="auth/logout.php">
                    <input type="hidden" name="csrf_token" value="<?= h(csrf_token()) ?>">
                    <button class="nav-button" type="submit">Sair</button>
                </form>
            </nav>
        <?php else: ?>
            <nav aria-label="Navegação principal">
                <a href="login.php">Entrar</a>
                <a class="nav-cta" href="cadastro.php">Criar conta</a>
            </nav>
        <?php endif; ?>
    </header>
    <main class="container">
    <?php
}

function page_end(): void
{
    ?>
    </main>
    <footer class="footer">LineTime · Uma comunidade em construção.</footer>
    </body>
    </html>
    <?php
}
