<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables([
            'vendedores',
            'condiciones_de_pagos',
            'segmentos',
            'zonas',
            'tipos_clientes',
            'tipos_conexiones',
            'clientes',
            'contactos',
            'conexiones_clientes',
            'users',
        ]);

        $this->call(VendedorSeeder::class);
        $this->call(CondicionesDePagoSeeder::class);
        $this->call(segmentosSeeder::class);
        $this->call(ZonaSeeder::class);
        $this->call(TiposClienteSeeder::class);
        $this->call(TiposConexionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(ContactosSeeder::class);
        $this->call(ConexionesClienteSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        
        foreach ($tables as $table){
            DB::table($table)->truncate();
        }
        
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');   
    }
}
