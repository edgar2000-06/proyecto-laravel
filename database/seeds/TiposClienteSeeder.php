<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TiposClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipos_clientes')->insert([
            'nombre' => 'mala paga',
        ]);

        factory(App\Tipos_clientes::class, 19)->create();
    }
}
