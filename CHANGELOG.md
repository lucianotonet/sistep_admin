# Changelog
_[2024-09-10T23:57:19Z](https://github.com/lucianotonet/sistep_admin/commits/b64977240783bd69dde21673eb38a93883d6e077)_
### Merge branch 'main' of github.com:lucianotonet/sistep_admin


_[2024-09-10T23:56:21Z](https://github.com/lucianotonet/sistep_admin/commits/75da0c1b3cc332a7d916ebae69cfab91b40fd4ec)_
### WIP: Melhora na atualização do changelog no fluxo de trabalho do GitHub

- A atualização do fluxo de trabalho evita execuções desnecessárias ao pular a atualização do changelog se a mensagem do commit contiver a tag [skip ci].
- O passo de criação ou atualização de Pull Request foi removido em favor de um commit direto e forçado para o branch principal, tornando o processo mais eficiente e direto.
- Essa abordagem simplifica a manipulação do changelog e reduz a complexidade do histórico de commits, facilitando a manutenção futura.


_[2024-09-10T23:56:15Z](https://github.com/lucianotonet/sistep_admin/commits/94942260078a8c404dbf5c61c6dc0fc07eab227a)_
### Merge pull request #11 from lucianotonet/create-pull-request/patch

Atualização do Changelog


_[2024-09-10T23:56:04Z](https://github.com/lucianotonet/sistep_admin/commits/84b9eb3c73b54b8c064cb3295f54ec801b4abfae)_
### [create-pull-request] automated change


_[2024-09-10T23:55:54Z](https://github.com/lucianotonet/sistep_admin/commits/fdab689a2dc6d790b1aead4fb0bf0a121ac6b95d)_
### Merge pull request #10 from lucianotonet/create-pull-request/patch

Atualização do Changelog


_[2024-09-10T23:54:15Z](https://github.com/lucianotonet/sistep_admin/commits/0b8cbe8ec54390b4c9e014b3cbe7d41c6a9d30dc)_
### [create-pull-request] automated change


_[2024-09-10T23:54:02Z](https://github.com/lucianotonet/sistep_admin/commits/9410c763c30b68d1c850643c876c50179908e1bd)_
### Update changelog-update.yml


_[2024-09-10T23:47:17Z](https://github.com/lucianotonet/sistep_admin/commits/e837534986eca7c41bf75f936f1cfdcdb596d7aa)_
### feat(changelog): improve pull request handling for changelog updates

- Renamed the step to reflect that it can now either create or update a pull request, enhancing clarity in the workflow.
- Removed unnecessary options for handling existing pull requests, streamlining the process and reducing potential confusion.
- This change ensures that updates to the changelog are managed more effectively, improving automation and maintaining consistency in project documentation.


_[2024-09-10T23:44:21Z](https://github.com/lucianotonet/sistep_admin/commits/a2a22288f409aa82bfe403d2cf2877f984ad2861)_
### WIP: Add handling for existing pull requests in changelog update workflow

- Implemented updates to the changelog update workflow
- Added functionality to handle existing pull requests, allowing for automatic updates without conflicts
- Enhanced the fetch capability to ensure the latest changes are always considered during the update process, promoting better synchronization and reducing manual intervention


_[2024-09-10T23:42:50Z](https://github.com/lucianotonet/sistep_admin/commits/05949771c50b38f00fc88583dc5d7e021643b51c)_
### Merge branch 'main' of github.com:lucianotonet/sistep_admin


_[2024-09-10T23:42:44Z](https://github.com/lucianotonet/sistep_admin/commits/9415c0dd707de81baa0640f8c21eaad8d0f469eb)_
### feat: Update changelog workflow conditions

- Adjusted the conditional check for creating a pull request to prevent unnecessary updates during pull_request events. This ensures that the changelog is only updated when changes occur outside of ongoing pull requests, streamlining the workflow and reducing clutter in the repository.

- By implementing this change, we improve the efficiency of the changelog management process and enhance clarity in our pull request activities.


_[2024-09-10T23:40:49Z](https://github.com/lucianotonet/sistep_admin/commits/9227290ea67502701879986567acab6c50af74b9)_
### Merge pull request #8 from lucianotonet/changelog-update

Atualização do Changelog


_[2024-09-10T23:39:51Z](https://github.com/lucianotonet/sistep_admin/commits/cd49caae575cfdd64d53489c15ef06f2d8b54d2e)_
### [create-pull-request] automated change


_[2024-09-10T23:39:37Z](https://github.com/lucianotonet/sistep_admin/commits/04191e49e7555e897844d240fb066ffac11f031f)_
### Merge pull request #7 from lucianotonet/changelog-update

Atualização do Changelog


_[2024-09-10T23:38:04Z](https://github.com/lucianotonet/sistep_admin/commits/9853de017eb8dd4b4a29069e7a4ca2bfcdb3522b)_
### [create-pull-request] automated change


_[2024-09-10T23:37:40Z](https://github.com/lucianotonet/sistep_admin/commits/b41403e4e5e42e17f5fe11fc947a1ff7e80c725a)_
### Merge branch 'main' of github.com:lucianotonet/sistep_admin


_[2024-09-10T23:37:01Z](https://github.com/lucianotonet/sistep_admin/commits/5625f7de3f0e6d5c31b7e33772487c777f50a3b6)_
### feat: Atualizar fluxo de geração de changelog e remover arquivo público desnecessário

- Introduzida uma condição para evitar que o bot do GitHub atualize o changelog, garantindo que apenas ações explícitas de desenvolvedores sejam registradas. Isso melhora a clareza e a relevância das alterações documentadas, evitando entradas automáticas que podem não refletir mudanças reais no código.

- O processo de atualização do changelog agora inclui uma mensagem de sucesso, simplificando o feedback ao usuário após a execução. A remoção do arquivo CHANGELOG.md da pasta pública reduz a confusão sobre onde encontrar o changelog atualizado, centralizando a informação apenas em um local.

Essas melhorias visam aprimorar a experiência do desenvolvedor e a transparência no controle de versões, ao mesmo tempo que simplificam a estrutura de arquivos do projeto.


_[2024-09-10T23:23:26Z](https://github.com/lucianotonet/sistep_admin/commits/bfa5eef208abdbac9a048542c406ae3816d2609e)_
### Merge pull request #5 from lucianotonet/changelog-update

Atualização do Changelog


_[2024-09-10T23:18:29Z](https://github.com/lucianotonet/sistep_admin/commits/c5c158543c7d7bf83d4ae693731e3b6b940b9760)_
### [create-pull-request] automated change


_[2024-09-10T23:18:06Z](https://github.com/lucianotonet/sistep_admin/commits/2ddfdc0917a3bf03b43c1b7b7ea3be7389a0ee54)_
### chore: update changelog workflow configuration

- Set fetch depth to 0 in the checkout step to ensure the full repository history is available, facilitating better changelog generation and visibility into changes.
- Upgrade to version 4 of the create-pull-request action for enhanced features and bug fixes.
- Change the base branch for the pull request to 'main', aligning with repository standards for smoother integration.
- Explicitly grant permissions for pull requests, reinforcing workflow security and ensuring the action can create pull requests as intended.

These improvements streamline the changelog update process and enhance maintainability.


_[2024-09-10T23:15:35Z](https://github.com/lucianotonet/sistep_admin/commits/bfd9465a9e5f99f0016ab243e7a436774729a769)_
### Trying to fix: "Error: Resource not accessible by integration"


_[2024-09-10T23:12:16Z](https://github.com/lucianotonet/sistep_admin/commits/afdc533fa73294622686112441dd3af95d007b06)_
### feat: enhance Alert component with customizable types

- Added a type prop to the Alert component to support different alert styles (success, warning, error, info).
- Improved the styling dynamically according to the alert type, enhancing user experience and clarity in notifications.
- Updated usage in the dashboard view to demonstrate the success type, making alerts more visually appealing and meaningful.

This change addresses the need for a more flexible alert system, allowing developers to easily indicate the nature of messages displayed to users.


_[2024-09-10T22:59:58Z](https://github.com/lucianotonet/sistep_admin/commits/1173dc1b911489324337e55c47767bb64a21f223)_
### Aprimora permissões de workflow para o changelog

Atualiza as permissões do workflow para permitir que o changelog seja escrito diretamente no repositório, melhorando a automação do processo de atualização. Essa mudança visa facilitar a manutenção do changelog e garantir que as atualizações sejam acionadas de forma mais eficiente.


_[2024-09-10T22:57:32Z](https://github.com/lucianotonet/sistep_admin/commits/e065e3c21e5fe66b0ba1e9d7348b60d8765b05dc)_
### Fix: "Warning: Unexpected input(s) 'head'"


_[2024-09-10T22:55:05Z](https://github.com/lucianotonet/sistep_admin/commits/1c4d4cdf53a3f4a5cdb3ac621b1279d60f3e47c5)_
### Atualiza workflow para geração automática de changelog

Adiciona um workflow que gera automaticamente o changelog ao fazer push na branch principal. Isso garante que as atualizações de changelog sejam sempre capturadas e que os desenvolvedores sejam notificados sobre alterações, melhorando a rastreabilidade das mudanças e a comunicação entre os membros da equipe.


_[2024-09-10T22:50:55Z](https://github.com/lucianotonet/sistep_admin/commits/32ef3f5e6eda3a4428b18215c43e51c2084b65c9)_
### Adiciona changelog e script para geração automática

Inclui um novo arquivo de changelog para documentar as alterações no projeto de forma clara e acessível. Com a adição do script de geração automática, é possível atualizar facilmente o changelog com base nos commits do GitHub, garantindo que as informações relevantes estejam sempre disponíveis. Essas melhorias visam facilitar a comunicação de mudanças entre a equipe e usuários, além de manter a documentação mais organizada e atualizada.


_[2024-09-10T22:38:53Z](https://github.com/lucianotonet/sistep_admin/commits/d18db603c0f4ad8bd5fb368257d6f27d83e1d3eb)_
### Implementa CRUD 'completo' para gerenciamento de testes

WIP // Adiciona funcionalidades para criar, editar, visualizar e excluir testes, juntamente com as respectivas ações e validações no Controller. Melhora a experiência do usuário com mensagens de sucesso após operações e compreensiva gestão de categorias e perguntas, utilizando JSON para armazenamento. Ajusta permissões de requisições, permitindo que todos os usuários possam criar e atualizar testes. Inclui novas views para interagir com testes, melhorando a estrutura e usabilidade do sistema.


_[2024-09-10T21:50:28Z](https://github.com/lucianotonet/sistep_admin/commits/a441e4cbb76c02462254ceb95dbb887eb1c0edd1)_
### Refatora a documentação e melhora o rodapé

Atualiza a seção de próximos passos na documentação para detalhar as próximas funcionalidades a serem implementadas, incluindo CRUD para testes e conformidade com a LGPD. Além disso, o rodapé da aplicação foi simplificado e estilizado para melhor responsividade e clareza, mantendo a conformidade com as diretrizes de proteção de dados. Essas mudanças visam aprimorar a usabilidade e a organização do projeto, tornando-o mais robusto e alinhado às necessidades dos usuários.


_[2024-09-10T21:13:21Z](https://github.com/lucianotonet/sistep_admin/commits/80fa2440d8399baaa9c03b20236a30bbc2264dc4)_
### Merge branch 'wip'


_[2024-09-09T07:46:21Z](https://github.com/lucianotonet/sistep_admin/commits/48e64b783a80ad85d7169bb1704a44f7af9c1972)_
### Atualiza dependências e refatora componentes da UI

Este commit atualiza várias dependências, como autoprefixer, postcss e tailwindcss, para melhorar a compatibilidade e segurança do projeto. Além disso, foram adicionados novos componentes de botão e uma estrutura de notificação com Vue, aprimorando a interface do usuário e preparando o ambiente para um desenvolvimento mais eficiente. Também inclui melhorias na apresentação visual das páginas de autenticação e redirecionamento, proporcionando uma experiência mais consistente e responsiva ao usuário.


