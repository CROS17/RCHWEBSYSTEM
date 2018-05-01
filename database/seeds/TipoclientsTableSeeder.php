<?php

use Illuminate\Database\Seeder;

class TipoclientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tipoclient::class, 30)->create();
    }
}
