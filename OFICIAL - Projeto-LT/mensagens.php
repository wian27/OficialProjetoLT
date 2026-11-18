<?php
declare(strict_types=1);
require_once __DIR__ . '/app/bootstrap.php';
require_once __DIR__ . '/app/page.php';
require_auth();
page_start('Mensagens');
?>
<section class="card">
    <h1>Mensagens</h1>
    <p>Esta área já está ligada à navegação do LineTime. O envio e recebimento de mensagens ainda precisa ser implementado junto com o banco de dados.</p>
    <p><a class="button" href="index.php">Voltar ao início</a></p>
</section>
<?php page_end(); ?>
