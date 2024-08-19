# SISTEP Admin

O **SISTEP Admin** é a interface administrativa para a plataforma SISTEP, desenvolvida para gerenciar a aplicação e correção de instrumentos psicológicos não privativos, como o DASS-21. Esta aplicação é destinada a psicólogos e estudantes de psicologia, permitindo o controle de usuários, testes, resultados e outras funcionalidades administrativas necessárias para a gestão do sistema.

## Funcionalidades Implementadas

- **Gestão de Usuários**: Administração de perfis de psicólogos e estudantes, incluindo a validação do CRP (Conselho Regional de Psicologia) para psicólogos.
- **Autenticação**: Sistema de autenticação embutido no Laravel, com suporte para verificação de e-mail.
- **Migrações e Seeders**: Estrutura de banco de dados com suporte para diferentes tipos de usuários (psicólogos e estudantes).
- **Registro e Perfil**: Interface de registro e atualização de perfil, com campos específicos para cada tipo de usuário.

## Funcionalidades a Implementar

- **Gestão de Testes**: Criação, edição e remoção de testes psicológicos, incluindo o acompanhamento do progresso dos pacientes.
- **Correção Automática**: Implementação de correção automática para testes como o DASS-21, com resultados e relatórios detalhados.
- **Relatórios**: Geração de relatórios personalizados com base nos resultados dos testes aplicados.
- **Integração com API do SISTEP App**: Sincronização com o frontend (SISTEP App) para aplicação e análise de testes em tempo real.

## Tecnologias Utilizadas

- **Backend**: Laravel 10.x (breeze stack)
- **Frontend**: Blade Templates, TailwindCSS
- **Banco de Dados**: MySQL
- **Autenticação**: Sistema de autenticação embutido no Laravel, com suporte para verificação de e-mail.

## Requisitos

- PHP 8.0+
- Composer 2.x
- MySQL 5.7+ ou MariaDB 10.2+
- Node.js 14.x+
- NPM ou Yarn

## Instalação

1. **Clone o repositório**:
   ```bash
   git clone https://github.com/lucianotonet/sistep_admin.git
   ```

2. **Navegue até o diretório do projeto**:
   ```bash
   cd sistep_admin
   ```

3. **Instale as dependências do PHP**:
   ```bash
   composer install
   ```

4. **Instale as dependências do Node.js**:
   ```bash
   npm install
   ```

5. **Configure o arquivo `.env`**:
   - Copie o arquivo `.env.example` para `.env` e configure as variáveis de ambiente, como conexão com o banco de dados.

6. **Execute as migrações e seeders**:
   ```bash
   php artisan migrate --seed
   ```

7. **Inicie o servidor de desenvolvimento**:
   ```bash
   php artisan serve
   ```

8. **Acesse a interface administrativa**:
   - Abra o navegador e vá para `http://localhost:8000`.

## Contribuição

Sinta-se à vontade para enviar pull requests e abrir issues. Todas as contribuições são bem-vindas!

## Licença

Este projeto está licenciado sob a [MIT License](LICENSE).

---

## Especificação de Requisitos

Precisamos preparar o sistema para um cenário onde múltiplos testes não privativos, além do DASS-21, possam ser aplicados. Vamos criar uma estrutura flexível que permita a adição e configuração de novos testes sem grandes alterações no código. Vamos expandir e refinar os objetos e fluxos anteriores, considerando a possibilidade de outros testes com formatos variados.

### 1. Objetos do Sistema

#### a) **Teste (Test)**
- **ID**: Identificador único do teste.
- **Nome**: Nome do teste (e.g., DASS-21, Escala de Autoestima de Rosenberg).
- **Descrição**: Breve descrição do teste e seus objetivos.
- **Categoria**: Categoria(s) à qual o teste pertence (e.g., ansiedade, depressão, autoestima).
- **Formato**: Define o formato do teste (e.g., escala Likert, múltipla escolha, resposta aberta).
- **Perguntas**: Lista de perguntas associadas ao teste.
  - **Texto**: Texto da pergunta.
  - **Tipo de Resposta**: Tipo de resposta esperado (e.g., Likert, múltipla escolha, resposta aberta).
  - **Opções de Resposta**: Lista de opções (se aplicável, como em uma escala Likert ou múltipla escolha).

#### b) **Aplicação de Teste (TestApplication)**
- **ID**: Identificador único da aplicação do teste.
- **Test**: Referência ao objeto Test.
- **Psychologist**: Referência ao psicólogo que aplicou o teste.
- **Patient**: Referência ao paciente que realizou o teste.
- **Data de Aplicação**: Data e hora em que o teste foi aplicado.
- **Respostas**: Respostas fornecidas pelo paciente.
- **Resultado**: Resultado agregado do teste (dependente do tipo de teste).
- **Status**: Status da aplicação do teste (e.g., Pendente, Concluído).
- **Link de Acesso**: URL para acesso ao teste.
- **QR Code**: Código QR gerado para acesso rápido ao teste.

### 2. Tipos de Testes Possíveis

Aqui estão alguns exemplos de outros testes que poderiam ser incluídos no sistema, junto com o formato de resposta que eles poderiam ter:

#### a) **Escala de Autoestima de Rosenberg**
- **Formato**: Escala Likert de 4 ou 5 pontos.
- **Perguntas**: 10 itens que avaliam a autoestima.
- **Exemplo de Pergunta**: "Eu me sinto uma pessoa de valor, pelo menos tanto quanto as outras."
- **Tipo de Resposta**: Likert (Concordo Totalmente, Concordo, Discordo, Discordo Totalmente).

#### b) **Inventário de Ansiedade de Beck (BAI)**
- **Formato**: Escala Likert de 4 pontos.
- **Perguntas**: 21 itens que avaliam sintomas de ansiedade.
- **Exemplo de Pergunta**: "Mãos tremendo."
- **Tipo de Resposta**: Likert (Nada, Leve, Moderado, Grave).

#### c) **Questionário de Saúde Geral (GHQ-12)**
- **Formato**: Escala Likert de 4 pontos.
- **Perguntas**: 12 itens que avaliam a saúde mental geral.
- **Exemplo de Pergunta**: "Você tem perdido muito sono por causa de preocupações?"
- **Tipo de Resposta**: Likert (Menos do que o usual, Não mais do que o usual, Mais do que o usual, Muito mais do que o usual).

### 3. Fluxo de Preparação e Aplicação

#### Passo 1: Configuração Inicial pelo Psicólogo
- O psicólogo acessa a interface administrativa e escolhe a opção para **Aplicar Novo Teste**.
- Ele seleciona o teste desejado (e.g., DASS-21, Escala de Autoestima de Rosenberg) da lista de testes disponíveis.
- O psicólogo insere as informações do paciente, como nome, email, e/ou telefone, ou seleciona um paciente previamente cadastrado.
- Dependendo do tipo de teste, o psicólogo pode personalizar algumas configurações, como o formato de resposta (caso haja diferentes opções de escalas Likert, por exemplo).

#### Passo 2: Geração de Link e QR Code
- O sistema gera automaticamente um **Link de Acesso** exclusivo para o teste, e, opcionalmente, um **QR Code**.
- O psicólogo pode enviar o link por WhatsApp, ou mostrar o QR Code para o paciente escanear.

#### Passo 3: Acesso pelo Paciente e Realização do Teste
- O paciente acessa a interface do teste através do link ou QR Code.
- O sistema identifica o paciente e o psicólogo associado à aplicação e apresenta o teste no formato específico configurado.
- O paciente responde às perguntas conforme o formato de resposta estabelecido (e.g., Likert, múltipla escolha).

#### Passo 4: Finalização e Análise dos Resultados
- Ao concluir o teste, os resultados são calculados com base nas respostas fornecidas e no algoritmo de pontuação específico do teste.
- O psicólogo acessa a interface administrativa para revisar os resultados, visualizar gráficos, e gerar relatórios.

### 4. Especificação Técnica dos Objetos

#### **Test**:
```javascript
{
  id: "uuid-test",
  name: "DASS-21",
  description: "Questionário para avaliar níveis de depressão, ansiedade e estresse.",
  category: ["depression", "anxiety", "stress"],
  format: "likert",  // "likert", "multiple_choice", "open_response"
  questions: [
    { text: "Eu achei difícil acalmar-me.", type: "likert", options: ["Não", "Um pouco", "Bastante", "O tempo todo"], category: "stress" },
    { text: "Minha boca ficou seca.", type: "likert", options: ["Não", "Um pouco", "Bastante", "O tempo todo"], category: "anxiety" },
    // ... mais perguntas
  ]
}
```

#### **TestApplication**:
```javascript
{
  id: "uuid-testApplication",
  test: "uuid-test",
  psychologist: "uuid-psychologist",
  patient: "uuid-patient",
  applicationDate: "2024-08-18T10:00:00Z",
  responses: [
    { questionId: 1, answer: "2" },  // Resposta à pergunta 1
    { questionId: 2, answer: "1" },  // Resposta à pergunta 2
    // ... mais respostas
  ],
  result: {
    depression: 10,
    anxiety: 7,
    stress: 12
  },
  status: "Concluído",  // "Pendente", "Concluído"
  accessLink: "https://sistep.app/test/dass21/uuid-testApplication",
  qrCode: "data:image/png;base64,..."
}
```
