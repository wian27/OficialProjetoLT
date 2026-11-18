<?php
declare(strict_types=1);
require_once __DIR__ . '/../app/bootstrap.php';
require_auth();
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Método não permitido.');
}
require_valid_csrf();
$content = trim((string)($_POST['content'] ?? ''));
if ($content === '' || strlen($content) > 2000) {
    flash('error', 'A publicação precisa ter entre 1 e 2.000 caracteres.');
    redirect('../index.php');
}
try {
    $stmt = db()->prepare('INSERT INTO posts (user_id, content) VALUES (:user_id, :content)');
    $stmt->execute(['user_id' => $_SESSION['user_id'], 'content' => $content]);
    redirect('../index.php');
} catch (Throwable $exception) {
    error_log('LineTime post database error: ' . $exception->getMessage());
    flash('error', 'Não foi possível publicar agora. Confira a conexão com o banco.');
    redirect('../index.php');
}
