<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MadurityLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('madurity_level')->insert( [
            [
                'id' => 1,
                'name' => 'Nulo',
                'status' => 1,
                'description' => "No se ha iniciado proceso de transformación, no existe confianza con las herramientas digitales.",
            ],
            [
                'id' => 2,
                'name' => 'Principiante',
                'status' => 1,
                'description' => "La organización ha iniciado la transformación digital por presión del entorno económico y aún desconoce los beneficios.",

            ],
            [
                'id' => 3,
                'name' => 'Medio',
                'status' => 1,
                'description' => "La organización tiene bases de implementación de transformación  y reconoce la necesidad de avanzar y proponer alternativas.",

            ],
            [
                'id' => 4,
                'name' => 'Avanzado',
                'status' =>1,
                'description' => 'La organización cuenta con implementación de transformación y ve sus beneficios en desempeño y mantienen  transformando procesos según las necesidades.',
            ]
        ]);
    }
}
