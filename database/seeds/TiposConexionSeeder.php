<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposConexionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_conexiones')->insert([
            'nombre' => 'index',
        ]);

        factory(App\Tipos_conexiones::class, 19)->create();
    }
}
