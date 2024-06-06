<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('factor')->insert( [
            [
                'id' => 1,
                'name' => 'Condiciones Estratégicas',
                'status' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Capacidades Organizacionales',
                'status' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Capacidades Tecnológicas',
                'status' => 1,
            ],
        ]);
    }
}
