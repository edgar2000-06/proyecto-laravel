<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zonas')->insert([
            'nombre' => 'Tucupita',
        ]);

        factory(App\Zonas::class, 19)->create();
    }
}
