<?php

use Illuminate\Database\Seeder;

class EskulTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Eskul::class, 10)->create();
    }
}
