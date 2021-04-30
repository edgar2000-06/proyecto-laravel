<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactos')->insert([
            'nombre_completo' => 'Jonathan Almendair',
            'telefono' => '02124563674',
            'celular' => '04120486790',
            'email' => 'turunturun@example.com',
            'cargo' => 'corrupto',
            'id_cliente' => 1,
        ]);

        factory(App\Contactos::class, 19)->create();
    }
}
