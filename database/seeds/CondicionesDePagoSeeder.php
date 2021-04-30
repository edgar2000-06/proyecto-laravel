<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CondicionesDePagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('condiciones_de_pagos')->insert([
            'nombre' => 'expres',
            'dias' => 30,
        ]);

        factory(App\Condiciones_de_pagos::class, 19)->create();
    }
}
