<?php
declare(strict_types=1);
// Encerrar sessão agora exige POST com token CSRF.
header('Location: login.php', true, 303);
exit;
