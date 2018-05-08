<?php

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
        factory(BusSale::class, 20)->create();
    }
}
