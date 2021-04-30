<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VendedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendedores')->insert([
            'nombre_completo' => 'Alexander Figueraz',
            'cedula' => 46936465,
            'email' => 'Alex@example.com',
            'telefono' => '03818674368',
            'direccion' => 'babilonia',
            'porceComisionVenta' => 4563.00,
            'porceComisionCobro' => 45634.00,
        ]);

        factory(App\Vendedores::class, 19)->create();
    }
}
