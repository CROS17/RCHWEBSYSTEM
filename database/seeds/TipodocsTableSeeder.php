<?php

use Illuminate\Database\Seeder;

class TipodocsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tipodoc::class, 30)->create();
    }
}
