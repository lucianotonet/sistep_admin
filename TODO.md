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

### 4. Próximos Passos
- **Implementar CRUD para Testes**: Criar, ler, atualizar e excluir testes psicológicos. ✅ (Concluído)
- **Gerenciamento de Pacientes**: Desenvolver interface para cadastro e gestão de pacientes.
- **Aplicação de Testes**: Finalizar o fluxo de aplicação de testes, incluindo a geração de links e QR codes.
- **Análise de Resultados**: Desenvolver funcionalidades para visualização e análise de resultados de testes.
- **Conformidade com a LGPD**: Garantir que o sistema esteja em conformidade com a LGPD, implementando consentimento informado e criptografia para dados sensíveis.

### Planejamento
1. **Finalizar a implementação do CRUD para testes**: Garantir que todas as operações de criação, leitura, atualização e exclusão estejam funcionando corretamente.
2. **Desenvolver a interface de gerenciamento de pacientes**: Permitir que psicólogos possam cadastrar e gerenciar informações dos pacientes.
3. **Testar o fluxo de aplicação de testes**: Verificar se a geração de links e QR codes está funcionando como esperado.
4. **Implementar a análise de resultados**: Criar gráficos e relatórios que ajudem na visualização dos dados coletados.
5. **Revisar a conformidade com a LGPD**: Implementar as medidas necessárias para garantir a proteção dos dados dos usuários.