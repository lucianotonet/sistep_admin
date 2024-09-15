# SISTEP Admin

Este repositório contém a interface administrativa do SISTEP (Sistema de Testes Psicológicos), parte do Exame de Qualificação de Dissertação do Programa de Pós-Graduação em Psicologia da [Nome da Instituição]. O SISTEP visa facilitar a aplicação, gestão e análise de testes psicológicos, como o DASS-21, permitindo que psicólogos e estudantes administrem testes em pacientes de maneira eficaz e segura.

## Funcionalidades

-   **Autenticação**: Gerenciamento de acesso seguro para psicólogos e estudantes.
-   **CRUD de Testes**: Criação, leitura, atualização e exclusão de testes psicológicos.
-   **Gestão de Pacientes**: Organização e gerenciamento de informações dos pacientes.
-   **Aplicação de Testes**: Ferramentas para aplicar testes e coletar resultados.
-   **Análise de Resultados**: Visualização e exportação de resultados de testes.

## Tecnologias Utilizadas

-   **Laravel Breeze**: Para autenticação e gerenciamento de usuários.
-   **Vue.js e TailwindCSS**: Para o front-end, oferecendo uma interface moderna e responsiva.
-   **MySQL**: Como banco de dados para armazenar informações dos usuários, testes, e resultados.

## Roadmap

### 1. **Configurar Sistema de Autenticação**

Implementar sistema de autenticação com Laravel Breeze para gerenciar acessos dos psicólogos e estudantes.

-   [x] Configurar autenticação básica.
-   [ ] Implementar restrições de acesso com base no tipo de usuário.
-   [ ] Testar fluxos de login e logout.

### 2. **Implementar CRUD para Testes**

Criar CRUD para gerenciar os diferentes testes disponíveis na plataforma.

-   [ ] Criar modelos e migrações para testes.
-   [ ] Desenvolver formulários de criação/edição de testes.
-   [ ] Implementar funcionalidades de listagem e remoção de testes.

### 3. **Gerenciamento de Pacientes**

Desenvolver interface para cadastro e gestão de pacientes, permitindo que psicólogos associem testes a pacientes.

-   [ ] Criar tabela para pacientes.
-   [ ] Implementar funcionalidades de cadastro, edição e exclusão.
-   [ ] Associar pacientes aos testes aplicados.

### 4. **Aplicação de Testes**

Desenvolver o fluxo para aplicação de testes, incluindo a geração de links e QR codes para pacientes.

-   [ ] Implementar lógica para seleção de testes e geração de links.
-   [ ] Integrar funcionalidade de geração de QR codes.
-   [ ] Testar o fluxo de aplicação de testes.

### 5. **Análise de Resultados**

Desenvolver funcionalidades para visualização e análise de resultados de testes.

-   [ ] Criar gráficos e relatórios baseados nos resultados.
-   [ ] Permitir exportação dos resultados para PDF ou outros formatos.
-   [ ] Testar a precisão e usabilidade do sistema de feedback.

### 6. **Conformidade com a LGPD**

Garantir que o sistema esteja em conformidade com a LGPD.

-   [ ] Implementar consentimento informado para coleta de dados.
-   [ ] Configurar criptografia para dados sensíveis.
-   [ ] Documentar a conformidade com a LGPD na documentação técnica.

## Contribuindo

Contribuições são bem-vindas! Para começar, faça um fork deste repositório, crie uma branch com suas alterações, e envie um pull request.

## Licença

Este projeto está licenciado sob a Licença MIT. Veja o arquivo [LICENSE](./LICENSE) para mais detalhes.

