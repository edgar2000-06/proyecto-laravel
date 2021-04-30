<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador',
            'email' => 'Admin@example.com',
            'password' => bcrypt('Administrador'),
            'is_admin' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'No-administrador',
            'email' => 'no-admin@example.com',
            'password' => bcrypt('falsisimo'),
        ]);

        factory(App\User::class, 19)->create();
    }
}
