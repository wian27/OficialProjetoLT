<?php
declare(strict_types=1);
require_once __DIR__ . '/../app/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Método não permitido.');
}
require_valid_csrf();
$name = trim((string)($_POST['name'] ?? ''));
$email = strtolower(trim((string)($_POST['email'] ?? '')));
$password = $_POST['password'] ?? '';
if (strlen($name) < 2 || strlen($name) > 120 || !filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 254 || !is_string($password) || strlen($password) < 12 || strlen($password) > 72) {
    flash('error', 'Confira seus dados. A senha precisa ter entre 12 e 72 caracteres.');
    redirect('../cadastro.php');
}

try {
    $stmt = db()->prepare('INSERT INTO users (name, email, password_hash) VALUES (:name, :email, :password_hash)');
    $stmt->execute([
        'name' => $name,
        'email' => $email,
        'password_hash' => password_hash($password, PASSWORD_DEFAULT),
    ]);
    flash('success', 'Conta criada. Entre com seu e-mail e senha.');
    redirect('../login.php');
} catch (Throwable $exception) {
    error_log('LineTime registration database error: ' . $exception->getMessage());
    flash('error', 'Não foi possível criar a conta. Confira os dados ou tente novamente.');
    redirect('../cadastro.php');
}
