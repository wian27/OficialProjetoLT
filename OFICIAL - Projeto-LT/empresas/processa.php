<?php
declare(strict_types=1);
// O cadastro de anúncios ainda não está implementado e este handler legado era inseguro.
http_response_code(410);
header('Content-Type: text/plain; charset=utf-8');
echo 'Cadastro de empresas e anúncios ainda não está disponível.';
