# LineTime — plano de consolidação do legado

## Verificação
- `projetolinetime`: protótipos antigos HTML/CSS, imagens e PHP.
- `OficialProjetoLT`: backend PHP 8.1+, autenticação, feed e perfil, com documentação de banco MySQL; o sistema real requer banco configurado.
- No código de perfil inspecionado, a edição ainda aparece como futura.

## Implementação nesta branch
A pasta `demo/` contém uma **demonstração estática independente** com feed, perfil, mensagens e seguidores simulados. Dados permanecem em memória durante a visita; não existe conta real, conexão de banco, notificação ou envio de mensagens. Serve para validar navegação e interface sem alterar o backend PHP.

## Próximos passos antes de produção
1. Definir modelo e endpoints de seguidores, conversas e mensagens, com autorização de participantes no servidor.
2. Criar verificação de e-mail com token expirável e limite de reenvios.
3. Adicionar edição de perfil segura e upload de imagens validado.
4. Implementar bloqueios, denúncias, privacidade, exclusão de conta e testes de segurança.
5. Conectar banco e testar o fluxo completo em ambiente de homologação.

A pasta `demo/` pode ser publicada como site estático separado. O aplicativo PHP real **não funciona no GitHub Pages**.