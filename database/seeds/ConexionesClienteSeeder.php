<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConexionesClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conexiones_clientes')->insert([
            'descripcion' => 'local',
            'fec_emis' => '2021-03-29',
            'activo' => 3448365865238,
            'id_cliente' => 1,
            'id_tipo_cone' => 1,
        ]);

        factory(App\Conexiones_clientes::class, 19)->create();
    }
}
