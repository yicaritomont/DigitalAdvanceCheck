<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert( [
            [
                'id' => 1,
                'name' => 'Administrador',
                'status' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Usuario',
                'status' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Invitado',
                'status' => 1,
            ],
        ]);
    }
}
