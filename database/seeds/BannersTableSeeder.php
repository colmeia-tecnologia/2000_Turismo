<?php

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Banner::class)->create([
            'image' => 'https://2000turismo.com.br/img/banner-2.jpg',
            'title' => '2000 Turismo',
            'description' => '<p>2000 Turismo</p>',
        ]);

        factory(Banner::class)->create([
            'image' => 'https://2000turismo.com.br/img/banner-1.jpg',
            'title' => 'Millenium Diesel',
            'description' => '<p>Millenium Diesel</p>',
        ]);
    }
}
