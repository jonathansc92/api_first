<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Books::create(
            [                
                'title' => 'A mandíbula de Caim',
                'description' => 'Em 1934, o compilador de palavras cruzadas do The Observer, Edward Powys Mathers, escreveu um romance ímpar: A mandíbula de Caim. A obra, que faz referência à primeira arma assassina de que se tem notícia, foi escrita sob o pseudônimo de Torquemada. A história não só era um suspense policial; era também um dos quebra-cabeças mais intrigantes já publicados.
                    O leitor precisará identificar seis assassinatos distribuídos em 100 páginas impressas em ordem totalmente aleatória. Existem milhões de combinações possíveis, mas apenas uma é a sequência correta. Com muita lógica e uma leitura perspicaz, pode-se organizá-las na progressão certa, de modo que se revelem seis vítimas de assassinato e seus respectivos algozes. O quebra-cabeça é extremamente difícil, a solução do problema permanece em segredo e até hoje apenas três pessoas conseguiram decifrar o enigma.  
                    Será que você consegue se juntar a esse grupo seleto?',
                'author_id' => 1
            ]
        );
        Books::create(
            [                
                'title' => 'O rei dos dividendos: A saga do filho de imigrantes pobres que se tornou o maior investidor pessoa física da bolsa de valores brasileira',
                'description' => 'Menino pobre, criado sozinho pela mãe num cortiço, Luiz Barsi Filho se tornou uma lenda no mundo dos investimentos.
                    Não foi da noite para o dia. Ele começou a investir no final dos anos 1960, passou por sucessivas crises e planos econômicos, e prosperou em (quase) todos os momentos.
                    Isso só foi possível porque criou um jeito próprio de operar no mercado, avesso à especulação e amparado no conhecimento profundo das empresas às quais se associa, sempre de olho nos dividendos pagos.
                    Após décadas trabalhando com disciplina, Barsi tornou-se um dos poucos bilionários brasileiros – maior acionista individual do Banco do Brasil e dono de parte respeitável de grandes conglomerados, como Unipar e Klabin.
                    Aos 83 anos, segue enxergando oportunidades onde outros veem crises e investindo cada centavo em novas ações de boas empresas.
                    Nesta autobiografia, ele expõe sua filosofia para quem deseja aprender a investir com solidez. E narra sua história pessoal para inspirar quem busca superar adversidades e ser bem-sucedido no mercado e na vida.',
                'author_id' => 2
            ]
        );
        Books::create(
            [                
                'title' => 'CONAN, O CIMÉRIO',
                'description' => 'Conan, o mais notório herói criado pelo cultuado escritor Robert Erwin Howard, que já completou 90 anos de existência, é o astro da coleção de quadrinhos franceses Conan, o Cimério, trazida ao Brasil pela Pipoca & Nanquim em versão definitiva.
                    Lançadas originalmente pela editora Glénat, estas aventuras do bárbaro apresentam releituras dos contos do personagem, inicialmente imortalizados nas páginas da lendária revista pulp Weird Tales, e, posteriormente, lançados como livros e compilações em formatos variados.
                    Cada volume francês é produzido por uma equipe criativa diferente, que, em sua totalidade, compreende os artistas mais talentosos de sua geração, portanto esta é a oportunidade perfeita para mergulhar no rico universo da Era Hiboriana pela primeira vez ou revisitá-lo por meio de novos olhares.
                    Esta terceira edição definitiva reúne três volumes publicados na França: Os Profetas do Círculo Negro, de Sylvain Runberg, Park Jae Kwang e Ooshima Hiroyuki, considerada uma das melhores histórias do personagem escritas por Robert E. Howard, em que a princesa Yasmina precisa da ajuda do cimério para salvar seu reino de um golpe de Estado; Inimigos em Casa, de Patrice Louinet e Paolo Martinello, em que o bárbaro é cooptado pelo nobre Murilo para cometer um assassinato e acaba sendo envolvido em um perigoso complô político; e O Deus na Urna, de Doug Headline e Emmanuel Civiello, em que Conan é contratado para roubar um valioso cálice, mas nem imagina que isso o levará de encontro a um mistério envolvendo um deus ancestral.
                    Conan, o Cimério – Edição Definitiva Vol. 3 tem formato europeu de 23 x 31 cm, capa dura, 212 páginas coloridas em papel offset e uma galeria de extras com textos, ilustrações e esboços sobre a criação das histórias. Uma verdadeira ode ao gênero Espada & Feitiçaria!',
                'author_id' => 3
            ],
        );
    }
}
