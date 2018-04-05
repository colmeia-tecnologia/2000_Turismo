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
            'title' => 'Quem somos nós',
        ]);

        factory(Page::class)->create([
            'title' => 'Venda de Peças',
        ]);

        factory(Page::class)->create([
            'title' => 'Fretamento, Turismo e Escolar',
        ]);

        factory(Page::class)->create([
            'title' => 'Reforma de ônibus',
            'description' => 'Na sua reforma de ônibus você pode adquirir um ônibus reserva'
        ]);

        factory(Page::class)->create([
            'title' => 'Compra/Venda de ônibus',
        ]);
    }
}
