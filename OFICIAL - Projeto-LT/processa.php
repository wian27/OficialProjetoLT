<?php
declare(strict_types=1);
// Endpoint legado desativado.
http_response_code(410);
header('Content-Type: text/plain; charset=utf-8');
echo 'Este endereço foi desativado.';
