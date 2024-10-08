# Changelog

_[2024-09-12T23:46:06Z](https://github.com/lucianotonet/sistep_admin/commits/05562390269380df8c3b69e1b6e88ea766286ba3)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-12T23:45:59Z](https://github.com/lucianotonet/sistep_admin/commits/8f6e8da6ca4ed22d2938546e927794914e5090e2)_

### refactor: simplify SSH setup for deployment

-   Replaced sshpass usage with SSH key authentication to enhance security and eliminate the need for plaintext passwords in the workflow.
-   Improved the SSH setup process by directly configuring the private key and managing the SSH agent, leading to cleaner and more manageable code.

This approach mitigates risks associated with storing sensitive information and aligns with best practices for secure deployment processes.

_[2024-09-12T23:33:39Z](https://github.com/lucianotonet/sistep_admin/commits/1d4925ddb93d51b2a68d1d1d7913b1f3a9ac5975)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-12T23:33:39Z](https://github.com/lucianotonet/sistep_admin/commits/e4c2b0cfb6f6d56e7c9fe5b4ceec41def6688083)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-12T23:31:29Z](https://github.com/lucianotonet/sistep_admin/commits/69474e2269e5d50af03c469ab91c885f0c6a6dbd)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-12T23:31:29Z](https://github.com/lucianotonet/sistep_admin/commits/f243a401829bc3d2109b25a4af1680ffadad79af)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-12T23:31:23Z](https://github.com/lucianotonet/sistep_admin/commits/743946787215a69e8317a9f79e3689d9378ed825)_

### WIP: Reorganize deployment workflow to optimize asset building

-   Moved the installation and building of Yarn dependencies earlier in the deployment process. This ensures that assets are built before running Laravel tests, leading to a more efficient workflow and reducing potential errors related to missing assets during testing.

-   Removed duplicated Yarn installation and build steps to streamline the process, improving clarity and maintainability of the deployment configuration.

These changes aim to optimize the deployment pipeline, making it more robust and efficient.

_[2024-09-12T23:29:09Z](https://github.com/lucianotonet/sistep_admin/commits/3c11e0bfd32451065903753dd4af40ef8a9093ce)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-12T23:29:09Z](https://github.com/lucianotonet/sistep_admin/commits/f618c40af0447d0bde01d57b9e6ba2c42b340d50)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-12T23:29:02Z](https://github.com/lucianotonet/sistep_admin/commits/fffcf5ecaa859cce5b7bd2f30f78d26cea35fd73)_

### feat(auth, profile): enhance registration and profile update functionality for user types

-   Updated registration tests to allow for user type selection (student and psychologist), ensuring that each type can provide relevant information during registration. This improvement supports a more versatile user onboarding process.

-   Modified profile update tests to reflect both student and psychologist contexts, verifying that users can update their details appropriately based on their role. This aligns with the application’s requirement to handle different user types distinctly.

-   Overall, these changes improve the robustness of user authentication and profile management by accommodating varying user types, ultimately enhancing user experience and promoting accurate data handling.

WIP: Additional validations and edge cases could be explored in future updates.

_[2024-09-12T23:23:41Z](https://github.com/lucianotonet/sistep_admin/commits/f3eec79527b53c65a3083b58c3ea4161a8e3a0c2)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-12T23:23:41Z](https://github.com/lucianotonet/sistep_admin/commits/16813a23e6a7b9678121185f731722f18c9523ef)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-12T23:23:34Z](https://github.com/lucianotonet/sistep_admin/commits/e9b37bad51468d57e7e68af5dec320a54f83548a)_

### feat: downgrade PHP setup action to improve stability

-   Replaced the setup-php GitHub Action from version 3 to version 2.
-   This change mitigates potential compatibility issues with existing workflows, ensuring a smoother deployment process with PHP 8.2.

Consider monitoring the effects post-deployment to identify any further enhancements needed for the PHP environment.

_[2024-09-12T23:22:39Z](https://github.com/lucianotonet/sistep_admin/commits/d894c280fff52217326e7b1d20752b8670ef97e7)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-12T23:22:39Z](https://github.com/lucianotonet/sistep_admin/commits/8595d85722e71c3d8f4b6d09b9037ae935596d14)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-12T23:22:33Z](https://github.com/lucianotonet/sistep_admin/commits/883909a967cd59636cc3cb662bcb63bb523c6662)_

### feat(deploy): downgrade PHP setup action version

-   Altered the PHP setup action from version 4 to version 3 to maintain compatibility with current workflow requirements.

-   This change helps prevent potential issues arising from the newer version, ensuring a stable deployment process and minimizing disruptions in the CI/CD pipeline.

_[2024-09-12T23:21:15Z](https://github.com/lucianotonet/sistep_admin/commits/75d65da13ca692a61d73c132c7177c21cee72d4a)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-12T23:21:15Z](https://github.com/lucianotonet/sistep_admin/commits/ee74c29a54ce5ac25407c4c9c81b3f22f6555c21)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-12T23:21:09Z](https://github.com/lucianotonet/sistep_admin/commits/1267d9215b5436cfd93667ad26b0afeeee0bffa0)_

### feat: add GitHub Actions workflow for Laravel app deployment

-   Implement a deployment workflow that automates the process of deploying the Laravel application to the server upon push to the main branch. This enhances the CI/CD pipeline, ensuring more consistent and reliable deployments.

-   The workflow includes steps to set up Node.js and PHP environments, install dependencies, run tests, build assets, and securely transfer files to the server. This helps in minimizing manual errors and streamlining the deployment process.

-   Leveraging sshpass for secure password-based authentication improves the automation experience, allowing for unattended deployments while maintaining security.

-   Further considerations include ensuring that secrets for SSH access are correctly configured and that the server environment is set up to accept incoming deployments.

_[2024-09-11T03:48:05Z](https://github.com/lucianotonet/sistep_admin/commits/de6010a8cc8b7e63358afe6cbc0993f59b019088)_

### WIP: Adiciona novos recursos e melhorias

-   Inclui a dependência de tipografia do Tailwind para melhorar o estilo do texto e a consistência visual em toda a aplicação.
-   Adiciona uma nova rota e visualização para o changelog, permitindo que os usuários acessem facilmente as atualizações e mudanças na documentação.
-   Atualiza o rodapé da aplicação para incluir um link para o changelog, facilitando o acesso e a transparência para os usuários sobre o histórico de alterações.

Essas mudanças visam aprimorar a usabilidade e a apresentação do conteúdo, proporcionando uma melhor experiência ao usuário e mantendo a aplicação informada sobre suas atualizações.

_[2024-09-11T03:48:05Z](https://github.com/lucianotonet/sistep_admin/commits/787e14f8c22e39e897faf38aa7a9f0c13b253897)_

### WIP: Adiciona novos recursos e melhorias

-   Inclui a dependência de tipografia do Tailwind para melhorar o estilo do texto e a consistência visual em toda a aplicação.
-   Adiciona uma nova rota e visualização para o changelog, permitindo que os usuários acessem facilmente as atualizações e mudanças na documentação.
-   Atualiza o rodapé da aplicação para incluir um link para o changelog, facilitando o acesso e a transparência para os usuários sobre o histórico de alterações.

Essas mudanças visam aprimorar a usabilidade e a apresentação do conteúdo, proporcionando uma melhor experiência ao usuário e mantendo a aplicação informada sobre suas atualizações.

_[2024-09-11T00:20:41Z](https://github.com/lucianotonet/sistep_admin/commits/3a78830f375f8c280f5e20ac4eb80444e519bac1)_

### Merge remote-tracking branch 'origin/main'

_[2024-09-11T00:17:04Z](https://github.com/lucianotonet/sistep_admin/commits/bd2bd2b7e324912fac84273656998977c0186125)_

### feat(todos): update changelog and enhance test index

-   Adicionado link atualizado no changelog para refletir as últimas alterações de commit.
-   Marcado o item de CRUD para Testes como concluído no documento de tarefas.

    O status atualizado fornece clareza sobre o progresso e permite gerenciamento eficaz das etapas restantes do projeto.

-   Estrutura de planejamento ampliada, detalhando as próximas ações em desenvolvimento, incluindo gerenciamento de pacientes e conformidade com a LGPD.

    Esse planejamento aprimorado serve para orientar o foco da equipe em tarefas críticas e garantir a implementação de requisitos legais.

-   Adicionada uma mensagem de sucesso na visualização dos testes, melhorando a experiência do usuário ao confirmar operações realizadas com sucesso.

Essa atualização visa melhorar a comunicação do progresso do projeto, a usabilidade e a conformidade com regulamentações necessárias.

WIP: as implementações futuras para análise de resultados e finalização do fluxo são necessárias para concluir o projeto.

_[2024-09-11T00:17:04Z](https://github.com/lucianotonet/sistep_admin/commits/48c25ccd0dbf70f443dc55fd1db393523536618a)_

### feat(todos): update changelog and enhance test index

-   Adicionado link atualizado no changelog para refletir as últimas alterações de commit.
-   Marcado o item de CRUD para Testes como concluído no documento de tarefas.

    O status atualizado fornece clareza sobre o progresso e permite gerenciamento eficaz das etapas restantes do projeto.

-   Estrutura de planejamento ampliada, detalhando as próximas ações em desenvolvimento, incluindo gerenciamento de pacientes e conformidade com a LGPD.

    Esse planejamento aprimorado serve para orientar o foco da equipe em tarefas críticas e garantir a implementação de requisitos legais.

-   Adicionada uma mensagem de sucesso na visualização dos testes, melhorando a experiência do usuário ao confirmar operações realizadas com sucesso.

Essa atualização visa melhorar a comunicação do progresso do projeto, a usabilidade e a conformidade com regulamentações necessárias.

WIP: as implementações futuras para análise de resultados e finalização do fluxo são necessárias para concluir o projeto.

_[2024-09-10T23:59:33Z](https://github.com/lucianotonet/sistep_admin/commits/3dae883b766ae3c3af32b3fbee53e420315749cd)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-10T23:59:26Z](https://github.com/lucianotonet/sistep_admin/commits/7b01bdc3d1841c5480e1b65fff16fb273a07f4d1)_

### chore: update push command in changelog workflow

-   Changed the push command to use --force instead of --force-with-lease in the changelog update workflow.
-   This adjustment simplifies the workflow by removing the lease check, ensuring that the changes are pushed more directly to the main branch without additional conditions.

Considerations:

-   Be cautious when using --force, as it can overwrite changes on the main branch. Further testing may be needed to confirm that this does not lead to unintended consequences.

_[2024-09-10T23:57:19Z](https://github.com/lucianotonet/sistep_admin/commits/d626f38d3e773326ff43bf67211a498aeac231dc)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-10T23:57:19Z](https://github.com/lucianotonet/sistep_admin/commits/b64977240783bd69dde21673eb38a93883d6e077)_

### Merge branch 'main' of github.com:lucianotonet/sistep_admin

_[2024-09-10T23:56:21Z](https://github.com/lucianotonet/sistep_admin/commits/75da0c1b3cc332a7d916ebae69cfab91b40fd4ec)_

### WIP: Melhora na atualização do changelog no fluxo de trabalho do GitHub

-   A atualização do fluxo de trabalho evita execuções desnecessárias ao pular a atualização do changelog se a mensagem do commit contiver a tag [skip ci].
-   O passo de criação ou atualização de Pull Request foi removido em favor de um commit direto e forçado para o branch principal, tornando o processo mais eficiente e direto.
-   Essa abordagem simplifica a manipulação do changelog e reduz a complexidade do histórico de commits, facilitando a manutenção futura.

_[2024-09-10T23:56:15Z](https://github.com/lucianotonet/sistep_admin/commits/94942260078a8c404dbf5c61c6dc0fc07eab227a)_

### Merge pull request #11 from lucianotonet/create-pull-request/patch

Atualização do Changelog
