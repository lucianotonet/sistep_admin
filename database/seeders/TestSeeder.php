<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Test; // Certifique-se de que o modelo Test está importado

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
            'category' => json_encode(['depressão', 'ansiedade', 'estresse']),
            'format' => 'likert',
            'questions' => json_encode([
                ['text' => 'Eu achei difícil acalmar-me.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'estresse', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Minha boca ficou seca.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'ansiedade', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu me sinto triste ou deprimido.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'depressão', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu tenho dificuldade em relaxar.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'estresse', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu me sinto nervoso.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'ansiedade', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu não consigo me concentrar.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'depressão', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu me sinto sobrecarregado.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'estresse', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu tenho dificuldade em dormir.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'ansiedade', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu me sinto sem esperança.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'depressão', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu me sinto cansado.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'estresse', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu me sinto triste.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'depressão', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu tenho dificuldade em me sentir feliz.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'depressão', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu me sinto ansioso.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'ansiedade', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu tenho dificuldade em relaxar.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'estresse', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu me sinto sobrecarregado.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'estresse', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu tenho dificuldade em me concentrar.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'depressão', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu me sinto nervoso.', 'type' => 'likert', 'options' => ['Não', 'Um pouco', 'Bastante', 'O tempo todo'], 'category' => 'ansiedade', 'weight' => [0, 1, 2, 3]],
            ]),
        ]);

        Test::create([
            'name' => 'Escala de Autoestima de Rosenberg',
            'description' => 'Avalia a autoestima do indivíduo.',
            'category' => json_encode(['autoestima']),
            'format' => 'likert',
            'questions' => json_encode([
                ['text' => 'Eu me sinto uma pessoa de valor, pelo menos tanto quanto as outras.', 'type' => 'likert', 'options' => ['Concordo Totalmente', 'Concordo', 'Discordo', 'Discordo Totalmente'], 'category' => 'autoestima', 'weight' => [3, 2, 1, 0]],
                ['text' => 'Eu gostaria de ter mais respeito por mim mesmo.', 'type' => 'likert', 'options' => ['Concordo Totalmente', 'Concordo', 'Discordo', 'Discordo Totalmente'], 'category' => 'autoestima', 'weight' => [3, 2, 1, 0]],
                ['text' => 'Eu sinto que tenho muitas boas qualidades.', 'type' => 'likert', 'options' => ['Concordo Totalmente', 'Concordo', 'Discordo', 'Discordo Totalmente'], 'category' => 'autoestima', 'weight' => [3, 2, 1, 0]],
                ['text' => 'Em geral, estou satisfeito comigo mesmo.', 'type' => 'likert', 'options' => ['Concordo Totalmente', 'Concordo', 'Discordo', 'Discordo Totalmente'], 'category' => 'autoestima', 'weight' => [3, 2, 1, 0]],
                ['text' => 'Eu me sinto inútil em algumas situações.', 'type' => 'likert', 'options' => ['Concordo Totalmente', 'Concordo', 'Discordo', 'Discordo Totalmente'], 'category' => 'autoestima', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Eu sou capaz de fazer as coisas tão bem quanto a maioria das pessoas.', 'type' => 'likert', 'options' => ['Concordo Totalmente', 'Concordo', 'Discordo', 'Discordo Totalmente'], 'category' => 'autoestima', 'weight' => [3, 2, 1, 0]],
                ['text' => 'Eu gostaria de ter mais confiança em mim mesmo.', 'type' => 'likert', 'options' => ['Concordo Totalmente', 'Concordo', 'Discordo', 'Discordo Totalmente'], 'category' => 'autoestima', 'weight' => [3, 2, 1, 0]],
                ['text' => 'Eu me sinto como uma pessoa de valor.', 'type' => 'likert', 'options' => ['Concordo Totalmente', 'Concordo', 'Discordo', 'Discordo Totalmente'], 'category' => 'autoestima', 'weight' => [3, 2, 1, 0]],
            ]),
        ]);

        Test::create([
            'name' => 'Inventário de Ansiedade de Beck (BAI)',
            'description' => 'Avalia sintomas de ansiedade.',
            'category' => json_encode(['ansiedade']),
            'format' => 'likert',
            'questions' => json_encode([
                ['text' => 'Mãos tremendo.', 'type' => 'likert', 'options' => ['Nada', 'Leve', 'Moderado', 'Grave'], 'category' => 'ansiedade', 'weight' => [0, 1, 2, 3]],
                ['text' => 'Sinto que estou perdendo o controle.', 'type' => 'likert', 'options' => ['Nada', 'Leve', 'Moderado', 'Grave'], 'category' => 'ansiedade', 'weight' => [0, 1, 2, 3]],
                // Adicione mais perguntas conforme necessário
            ]),
        ]);
    }
}
