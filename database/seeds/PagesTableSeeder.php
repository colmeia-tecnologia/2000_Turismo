<?php

use App\Models\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Page::class)->create([
            'image' => 'https://2000turismo.com.br/img/banner-2.jpg',
            'title' => 'Quem somos nós',
            'description' => 'Conheça mais sobre a 2000 Turismo',
            'text' => '<p><span>A 2000 Turismo Ltda. teve sua funda&ccedil;&atilde;o em maio do ano de 2000, ap&oacute;s a dissolu&ccedil;&atilde;o de uma sociedade. Quando percebeu que deveria se manter no ramo do tranporte um dos s&oacute;cios se prop&ocirc;s a retornar ao mercado fundando a empresa, na cidade de Po&ccedil;os de Caldas, onde ainda se encontra sua sede. A transportadora conta ainda com uma parceira no Nordeste do pa&iacute;s, a My Bus, fruto desta mesma sociedade anterior e de um mesmo ideal: o de oferecer um servi&ccedil;o de transporte da mais alta qualidade. Mesmo considerada uma jovem empresa, a 2000 Turismo se encontra em crescente participa&ccedil;&atilde;o no ramo do transporte e conta com um rigoroso processo de manuten&ccedil;&atilde;o de sua frota, cujos ve&iacute;culos substitu&iacute;dos s&atilde;o revisados e vendidos a cada 5 anos. Em apenas 18 anos, a 2000 Turismo j&aacute; se encontra em posi&ccedil;&atilde;o de destaque e continua, assim, para se tornar refer&ecirc;ncia no mercado de transportes.</span></p>',
        ]);

        factory(Page::class)->create([
            'image' => 'https://2000turismo.com.br/img/pecas.jpg',
            'title' => 'Venda de Peças',
            'description' => 'Veja nossas peças!',
            'text' => '<p>Veja nossas pe&ccedil;as!</p>',
        ]);

        factory(Page::class)->create([
            'image' => 'https://2000turismo.com.br/img/banner-2.jpg',
            'title' => 'Fretamento, Turismo e Escolar',
            'description' => 'Saiba mais!',
            'text' => '<p>A 2000 Turismo oferece servi&ccedil;os de aluguel de &ocirc;nibus para atender seus clientes de acordo com suas necessidades espec&iacute;ficas, sempre com a garantia de m&aacute;xima seguran&ccedil;a e conforto.</p>
                <p>Para viagens eventuais, como excurs&otilde;es e eventos, &eacute; poss&iacute;vel contratar o servi&ccedil;o na modalidade turismo.</p>
                <p>Para transporte cont&iacute;nuo, como condu&ccedil;&atilde;o di&aacute;ria de funcion&aacute;rios, &eacute; poss&iacute;vel contratar o fretamento.</p>',
        ]);

        factory(Page::class)->create([
            'image' => 'https://2000turismo.com.br/img/bus3.jpeg',
            'title' => 'Reforma de ônibus',
            'description' => 'Saiba mais!',
            'text' => '<p>Enquanto seu &ocirc;nibus &eacute; reformado voc&ecirc; pode adquirir um &ocirc;nibus reserva at&eacute; o servi&ccedil;o ficar pronto!</p>
                <p>Entre em contato para mais informa&ccedil;&otilde;es!</p>',
        ]);

        factory(Page::class)->create([
            'image' => 'https://2000turismo.com.br/img/bus4.jpg',
            'title' => 'Compra/Venda de ônibus',
            'description' => 'Saiba Mais!',
            'text' => '<p>Compramos e vendemos seu &ocirc;nibus.</p>
                <p>Entre em contato para mais informa&ccedil;&otilde;es!</p>',
        ]);
    }
}
