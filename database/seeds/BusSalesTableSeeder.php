<?php

use App\Models\BusImage;
use App\Models\BusSale;
use Illuminate\Database\Seeder;

class BusSalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Onibus 1
        factory(BusSale::class)->create([
            'model' => '700',
            'bodyModel' => 'GranMidi',
            'year' => '2009',
            'seatings' => '47',
            'description' => 'Motor 15180 4 Cilindros, Eletrônico, Assoalho de Alumínio, Estofado, Bancada Urbana',
            'active' => '1',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '1',
            'image' => env('APP_URL').'/img/onibus1_1.jpg',
            'title' => 'Frente',
            'description' => null,
            'order' => '1',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '1',
            'image' => env('APP_URL').'/img/onibus1_2.jpg',
            'title' => 'Lateral Esquerda',
            'description' => null,
            'order' => '2',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '1',
            'image' => env('APP_URL').'/img/onibus1_3.jpg',
            'title' => 'Dentro',
            'description' => null,
            'order' => '4',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '1',
            'image' => env('APP_URL').'/img/onibus1_4.jpg',
            'title' => 'Motorista',
            'description' => null,
            'order' => '5',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '1',
            'image' => env('APP_URL').'/img/onibus1_5.jpg',
            'title' => 'Trás',
            'description' => null,
            'order' => '3',
        ]);



        //Onibus 2
        factory(BusSale::class)->create([
            'model' => '500',
            'bodyModel' => '371',
            'year' => '1995',
            'seatings' => '44',
            'description' => 'Motor O400/5 497, Bancada Rodoviária, Semi-Novo',
            'active' => '1',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '2',
            'image' => env('APP_URL').'/img/onibus2_1.jpg',
            'title' => 'Lateral Esquerda',
            'description' => null,
            'order' => '2',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '2',
            'image' => env('APP_URL').'/img/onibus2_2.jpg',
            'title' => 'Frente',
            'description' => null,
            'order' => '1',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '2',
            'image' => env('APP_URL').'/img/onibus2_3.jpg',
            'title' => 'Dentro',
            'description' => null,
            'order' => '5',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '2',
            'image' => env('APP_URL').'/img/onibus2_4.jpg',
            'title' => 'Motorista',
            'description' => null,
            'order' => '6',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '2',
            'image' => env('APP_URL').'/img/onibus2_5.jpg',
            'title' => 'Trás',
            'description' => null,
            'order' => '4',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '2',
            'image' => env('APP_URL').'/img/onibus2_6.jpg',
            'title' => 'Lateral Direita',
            'description' => null,
            'order' => '3',
        ]);



        //Onibus 3
        factory(BusSale::class)->create([
            'model' => '1590',
            'bodyModel' => '371',
            'year' => '1993',
            'seatings' => '44',
            'description' => 'Motor 0400/5 449, Bancada Rodoviária',
            'active' => '1',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '3',
            'image' => env('APP_URL').'/img/onibus3_1.jpg',
            'title' => 'Frente',
            'description' => null,
            'order' => '1',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '3',
            'image' => env('APP_URL').'/img/onibus3_2.jpg',
            'title' => 'Dentro',
            'description' => null,
            'order' => '5',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '3',
            'image' => env('APP_URL').'/img/onibus3_3.jpg',
            'title' => 'Motorista',
            'description' => null,
            'order' => '6',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '3',
            'image' => env('APP_URL').'/img/onibus3_5.jpg',
            'title' => 'Lateral Direita',
            'description' => null,
            'order' => '3',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '3',
            'image' => env('APP_URL').'/img/onibus3_6.jpg',
            'title' => 'Lateral Esquerda',
            'description' => null,
            'order' => '2',
        ]);

        factory(BusImage::class)->create([
            'bus_id' => '3',
            'image' => env('APP_URL').'/img/onibus3_7.jpg',
            'title' => 'Trás',
            'description' => null,
            'order' => '4',
        ]);
    }
}
