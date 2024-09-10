# Changelog
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


_[2024-08-30T07:27:46Z](https://github.com/lucianotonet/sistep_admin/commits/3f67682973b97b2bebf8e6b833bd1fcca90d22a2)_
### Refatorar javascipt nos formulários e traduções

Atualização de componentes de formulário para melhor legibilidade e consistência, com particular atenção na tradução de elementos para o português. Melhoria da estrutura visual, tornando botões e labels mais uniformes em seus tamanhos e margens. Essas mudanças buscam facilitar a experiência do usuário e garantir que todos os elementos sejam acessíveis e claros em sua apresentação. Além disso, a personalização dos textos para o público alvo melhora a usabilidade do sistema.


_[2024-08-21T07:37:37Z](https://github.com/lucianotonet/sistep_admin/commits/53d41c3d6cf6bbb55ada4d9574b18da7630231d0)_
### Adicionar controle e modelos de pacientes e testes

Implementados novos controladores e modelos para gerenciar pacientes e aplicações de teste, permitindo um cadastro eficiente e a aplicação de testes de forma estruturada. As mudanças incluem rotas, validações e políticas de acesso para garantir a segurança e integridade dos dados. Essas adições facilitam funcionalidades futuras, como a geração de QR codes para acesso aos testes. Além disso, estruturas de seeder e factory foram criadas para facilitar a inserção de dados durante os testes.


_[2024-08-19T05:32:55Z](https://github.com/lucianotonet/sistep_admin/commits/633c2143f086de9a781eea171c407db7844ac8ca)_
### chore: Add MIT License to the project


_[2024-08-19T00:11:58Z](https://github.com/lucianotonet/sistep_admin/commits/f7a0a1bf1ed55b29fc9d827122df2210af3eb2c1)_
### Atualiza documentação do README para o SISTEP Admin

Expandiu e refinou o README, oferecendo uma visão clara das funcionalidades implementadas e das planejadas, além de descrever o fluxo de uso para psicólogos e pacientes. Essas mudanças visam facilitar a compreensão e configuração do sistema, preparando-o para futuros testes psicológicos com suporte flexível para novos formatos e aplicações.


_[2024-08-17T08:00:06Z](https://github.com/lucianotonet/sistep_admin/commits/19dc0b2cb4907f84b596ff01563fe7be069dea1b)_
### feat: Add user_type, crp, and institution fields to User model, views, and migrations

feat: Enhance User model with user_type, crp, institution

Added fields for user type, CRP number, and institution to improve user management. This enables distinct roles for students and psychologists, enforcing required fields for each type. Adjustments to validation rules and front-end logic ensure a better user experience when updating profiles.


_[2024-08-17T07:19:18Z](https://github.com/lucianotonet/sistep_admin/commits/525dfc035a94f7be3f73d9cafaf2d2db10e86e32)_
### chore: Add user_type, crp, and institution fields to User model, views, and migrations


_[2024-08-17T06:19:01Z](https://github.com/lucianotonet/sistep_admin/commits/ff8d48454185c12182ed4f7224b88fcb2eefb517)_
### Install Breeze


_[2024-08-17T06:16:56Z](https://github.com/lucianotonet/sistep_admin/commits/8b3c2a0b3433281bc77ce8750a0d1c2b0619fa54)_
### Set up a fresh Laravel app


