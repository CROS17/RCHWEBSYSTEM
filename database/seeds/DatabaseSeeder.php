<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(PostsTableSeeder::class);

        $this->call(TipoclientsTableSeeder::class);
        $this->call(TipodocsTableSeeder::class);
        $this->call(CLientsTableSeeder::class);
        $this->call(TipoeventsTableSeeder::class);
        $this->call(ContratosTableSeeder::class);

    }
}
