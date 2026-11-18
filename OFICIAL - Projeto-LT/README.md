# LineTime

Base PHP para a primeira versão funcional do LineTime. Inclui cadastro, login, sessão protegida, feed de publicações e perfil básico. O banco ainda não está conectado: nenhum segredo ou credencial deve ser colocado no código ou enviado ao GitHub.

## Requisitos

- PHP 8.1 ou superior, com `PDO` e `pdo_mysql` habilitados.
- MySQL 8.0+ ou MariaDB 10.5+.
- Hospedagem com HTTPS e suporte a variáveis de ambiente do PHP.

## Preparar o banco

1. Crie/seleciona um banco MySQL no painel da hospedagem.
2. Execute `database/schema.sql` no phpMyAdmin ou cliente MySQL. O esquema cria `users` e `posts`, sem inserir usuários de demonstração.
3. No painel da hospedagem, configure `DB_HOST`, `DB_PORT`, `DB_NAME`, `DB_USER` e `DB_PASS`. Use `.env.example` apenas como referência; o PHP não carrega arquivos `.env` automaticamente.
4. Publique a pasta `OFICIAL - Projeto-LT` como raiz do site e habilite HTTPS. Não publique em hospedagem estática/GitHub Pages: o sistema precisa executar PHP.
5. Abra `cadastro.php`, crie uma conta e entre em `login.php`.

## Proteções incluídas

- Senhas com `password_hash()` e verificação por `password_verify()`.
- Consultas preparadas com PDO, validação de entrada e saída escapada.
- Limite de tentativas de login por endereço de rede.
- Token CSRF em formulários que alteram dados.
- Cookies de sessão `HttpOnly`, `SameSite=Lax` e `Secure` quando HTTPS está ativo; regeneração do identificador ao entrar.
- Cabeçalhos contra enquadramento, sniffing e carregamento externo de scripts.
- Erros técnicos vão para o log do servidor, não para a tela.
- SQL e diretórios de protótipos antigos bloqueados pelo `.htaccess` em servidores Apache.

## Limites desta versão

A conexão só passa a funcionar depois de configurar as variáveis do banco. A versão inicial implementa contas e publicações; mensagens, upload de fotos, seguir usuários, recuperação/verificação de e-mail, moderação e controles de privacidade ainda precisam ser construídos. As telas antigas foram mantidas como histórico, mas os diretórios `_index` e `empresas` não fazem parte da versão ativa.

Os antigos dumps SQL continham registros de demonstração e foram removidos da versão atual. O histórico Git ainda pode conter esses arquivos. Se algum dado/senha era real ou reutilizado, altere a senha imediatamente; a remoção completa do histórico exige uma operação separada que reescreve os commits.
