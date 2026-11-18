<?php
declare(strict_types=1);
// O endpoint antigo que gravava conteúdo em arquivo foi desativado.
http_response_code(410);
header('Content-Type: text/plain; charset=utf-8');
echo 'Este endereço foi desativado. Use o feed do LineTime.';
