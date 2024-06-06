<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DimensionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dimension')->insert( [
            [
                'id' => 1,
                'name' => 'Estrategia y Gobierno',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "Alineación de las prioridades estratégicas y la tecnología,Gobernanza e Indicadores de transformación digital .",
                'factor_id'=> 1,
            ],
            [
                'id' => 2,
                'name' => 'Clientes',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "Cliente como Centro, Marketing Digital, Gestión de comunidades y redes en el ecosistema digital.",
                'factor_id'=> 1,
            ],
            [
                'id' => 3,
                'name' => 'Modelos de Negocio',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "Cliente como Centro, Marketing Digital, Gestión de comunidades y redes en el ecosistema digital.",
                'factor_id'=> 1,
            ],
            [
                'id' => 4,
                'name' => 'Organización',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "Estructura flexible/ dinámica, Gestión de Procesos, Gestión de Proyectos, Comunicación Digital, Gestión de Conocimiento.",
                'factor_id'=> 2,
            ],
            [
                'id' => 5,
                'name' => 'Cultura',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "Sensibilidad para la adopción tecnológica, Agilidad, Innovación, Liderazgo .",
                'factor_id'=> 2,
            ],
            [
                'id' => 6,
                'name' => 'Personas',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "Talentos del Colaborador, Modelos de Gestión Humana, Aprendizaje.",
                'factor_id'=> 2,
            ],
            [
                'id' => 7,
                'name' => 'Tecnología e Inversión',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "Arquitectura Tecnológica y Gobierno de TI, Ciberseguridad, Redes y Conectividad, Investigación y Desarrollo Tecnológico, Inversión Económica.",
                'factor_id'=> 3,
            ],
            [
                'id' => 8,
                'name' => 'Datos y Analítica',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "Estructura para la analítica, Uso de datos, Modelos Analíticos.",
                'factor_id'=> 3,
            ],
            
        ]);
    }
}
