<?php
declare(strict_types=1);
require_once __DIR__ . '/../app/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Método não permitido.');
}
require_valid_csrf();
$email = strtolower(trim((string)($_POST['email'] ?? '')));
$password = $_POST['password'] ?? '';
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || !is_string($password) || $password === '' || strlen($password) > 72) {
    flash('error', 'E-mail ou senha inválidos.');
    redirect('../login.php');
}

try {
    $ipHash = hash('sha256', (string)($_SERVER['REMOTE_ADDR'] ?? 'unknown'));
    $limit = db()->prepare('SELECT attempts, window_started_at FROM login_attempts WHERE ip_hash = :ip_hash');
    $limit->execute(['ip_hash' => $ipHash]);
    $attempt = $limit->fetch();
    if ($attempt && (int)$attempt['attempts'] >= 10 && strtotime((string)$attempt['window_started_at']) > time() - 900) {
        flash('error', 'Não foi possível acessar a conta agora. Tente novamente em alguns minutos.');
        redirect('../login.php');
    }

    $stmt = db()->prepare('SELECT id, name, password_hash FROM users WHERE email = :email LIMIT 1');
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch();
    if (!$user || !password_verify($password, $user['password_hash'])) {
        $record = db()->prepare("INSERT INTO login_attempts (ip_hash, attempts, window_started_at) VALUES (:ip_hash, 1, CURRENT_TIMESTAMP) ON DUPLICATE KEY UPDATE attempts = IF(window_started_at < CURRENT_TIMESTAMP - INTERVAL 15 MINUTE, 1, attempts + 1), window_started_at = IF(window_started_at < CURRENT_TIMESTAMP - INTERVAL 15 MINUTE, CURRENT_TIMESTAMP, window_started_at)");
        $record->execute(['ip_hash' => $ipHash]);
        flash('error', 'E-mail ou senha inválidos.');
        redirect('../login.php');
    }
    $clear = db()->prepare('DELETE FROM login_attempts WHERE ip_hash = :ip_hash');
    $clear->execute(['ip_hash' => $ipHash]);
    session_regenerate_id(true);
    $_SESSION['user_id'] = (int)$user['id'];
    $_SESSION['user_name'] = (string)$user['name'];
    unset($_SESSION['csrf_token']);
    redirect('../index.php');
} catch (Throwable $exception) {
    error_log('LineTime login database error: ' . $exception->getMessage());
    flash('error', 'Não foi possível acessar a conta agora. Confira a configuração do banco de dados.');
    redirect('../login.php');
}
