<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Test;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar o teste DASS-21
        Test::create([
            'name' => 'DASS-21',
            'description' => 'Questionário para avaliar níveis de depressão, ansiedade e estresse.',
            'category' => json_encode([
                'depressão',
                'ansiedade',
                'estresse'
            ]),
            'format' => 'likert',
            'questions' => json_encode($this->getDASS21Questions()),
        ]);

        // Criar o teste de Autoestima de Rosenberg
        Test::create([
            'name' => 'Escala de Autoestima de Rosenberg',
            'description' => 'Questionário para avaliar a autoestima do indivíduo.',
            'category' => json_encode(['autoestima']),
            'format' => 'likert',
            'questions' => json_encode($this->getRosenbergQuestions()),
        ]);

        // Criar o Inventário de Ansiedade de Beck (BAI)
        Test::create([
            'name' => 'Inventário de Ansiedade de Beck (BAI)',
            'description' => 'Questionário para avaliar os sintomas de ansiedade.',
            'category' => json_encode(['ansiedade']),
            'format' => 'likert',
            'questions' => json_encode($this->getBAIQuestions()),
        ]);

        // Adicionar outros testes
        Test::create([
            'name' => 'Inventário de Depressão de Beck (BDI)',
            'description' => 'Questionário para avaliar os sintomas de depressão.',
            'category' => json_encode(['depressão']),
            'format' => 'likert',
            'questions' => json_encode($this->getBDIQuestions()),
        ]);

        Test::create([
            'name' => 'Escala de Ansiedade de Hamilton',
            'description' => 'Questionário para avaliar a gravidade da ansiedade.',
            'category' => json_encode(['ansiedade']),
            'format' => 'likert',
            'questions' => json_encode($this->getHamiltonQuestions()),
        ]);
    }

    private function getDASS21Questions()
    {
        $commonOptions = [
            'Não se aplicou de maneira alguma',
            'Aplicou-se em algum grau, ou por pouco tempo',
            'Aplicou-se em um grau considerável, ou por uma boa parte do tempo',
            'Aplicou-se muito, ou na maioria do tempo'
        ];

        return [
            // Subescala de Estresse
            [
                'text' => 'Achei difícil me acalmar',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'estresse',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Achei que minha boca estava seca',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Não consegui sentir nenhum sentimento positivo',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'depressão',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Tive dificuldade em respirar (por exemplo, respiração rápida ou falta de ar sem esforço físico)',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Achei difícil ter iniciativa para fazer as coisas',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'depressão',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Tive a tendência de reagir de forma exagerada às situações',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'estresse',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Senti tremores (por exemplo, nas mãos)',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],

            // Subescala de Depressão
            [
                'text' => 'Senti que não tinha esperança',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'depressão',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Achei difícil relaxar',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'estresse',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Eu estava em tal estado de nervosismo que me sentia fisicamente agitado',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Achei difícil me entusiasmar com qualquer coisa',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'depressão',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Senti que eu estava muito irritado',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'estresse',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Senti que estava prestes a entrar em pânico',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Eu senti que não valia a pena viver',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'depressão',
                'weight' => [0, 1, 2, 3]
            ],

            // Subescala de Estresse (cont.)
            [
                'text' => 'Percebi que estava ficando impaciente facilmente',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'estresse',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Senti dificuldade em engolir',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Eu não consegui suportar qualquer coisa que me impedisse de continuar com o que estava fazendo',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'estresse',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Tive uma sensação de desânimo ao enfrentar as dificuldades',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'depressão',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Tive uma sensação de pânico, sem razão aparente',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Senti que não tinha energia suficiente para fazer nada',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'depressão',
                'weight' => [0, 1, 2, 3]
            ],
        ];
    }


    private function getRosenbergQuestions()
    {
        $commonOptions = [
            'Discordo totalmente',
            'Discordo',
            'Concordo',
            'Concordo totalmente'
        ];

        return [
            [
                'text' => 'Eu sinto que sou uma pessoa de valor, no mínimo, tanto quanto as outras pessoas',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'autoestima',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Eu acho que eu tenho várias boas qualidades',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'autoestima',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Levando tudo em conta, eu penso que eu sou um fracasso',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'autoestima',
                'weight' => [3, 2, 1, 0]
            ],
            [
                'text' => 'Eu acho que sou capaz de fazer as coisas tão bem quanto a maioria das pessoas',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'autoestima',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Eu acho que eu não tenho muito do que me orgulhar',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'autoestima',
                'weight' => [3, 2, 1, 0]
            ],
            [
                'text' => 'Eu sinto que não sou tão bom quanto os outros',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'autoestima',
                'weight' => [3, 2, 1, 0]
            ],
        ];
    }

    private function getBAIQuestions()
    {
        $commonOptions = [
            'Absolutamente não',
            'Levemente',
            'Moderadamente',
            'Gravemente'
        ];

        return [
            [
                'text' => 'Dormência ou formigamento',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Sensação de calor',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Tremores nas pernas',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Incapaz de relaxar',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Medo que aconteça o pior',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Sinto que estou perdendo o controle',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
        ];
    }

    private function getBDIQuestions()
    {
        $commonOptions = [
            'Nunca',
            'Raramente',
            'Às vezes',
            'Frequentemente'
        ];

        return [
            [
                'text' => 'Eu me sinto triste',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'depressão',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Eu me sinto sem esperança',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'depressão',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Eu não tenho interesse em atividades que costumava gostar',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'depressão',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Eu me sinto cansado o tempo todo',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'depressão',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Eu me sinto inútil',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'depressão',
                'weight' => [0, 1, 2, 3]
            ],
        ];
    }

    private function getHamiltonQuestions()
    {
        $commonOptions = [
            'Não',
            'Levemente',
            'Moderadamente',
            'Severamente'
        ];

        return [
            [
                'text' => 'Sentimentos de tristeza',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Sentimentos de culpa',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Insônia',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Dificuldade de concentração',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
            [
                'text' => 'Sentimentos de apatia',
                'type' => 'likert',
                'options' => $commonOptions,
                'category' => 'ansiedade',
                'weight' => [0, 1, 2, 3]
            ],
        ];
    }
}
