<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert([
            'nombre_completo' => 'Gabriel',
            'razon_social' => 'perensejo',
            'rif' => 'e2847',
            'direccion_fiscal' => 'tangamandapio',
            'direccion_entrega' => 'tangamandapio',
            'email' => 'ark@example.com',
            'telefono' => 02134566547,
            'inactivo' => 0,
            'agente_retencion' => 1,
            'porc_dec_global' => 746.00,
            'id_zona' => 1,
            'id_tipo_cliente' => 1,
            'id_segmento' => 1,
            'id_vendedor' => 1,
            'id_condicionDePago' => 1,
        ]);

        factory(App\Clientes::class, 19)->create();
    }
}
