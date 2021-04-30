<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class segmentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('segmentos')->insert([
            'nombre' => 'test',
        ]);

        factory(App\Segmentos::class, 19)->create();
    }
}
