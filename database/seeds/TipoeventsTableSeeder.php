<?php

use Illuminate\Database\Seeder;

class TipoeventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tipoevent::class, 20)->create();
    }
}
