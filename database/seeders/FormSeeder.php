<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('form')->insert( [
            [
                'id' => 1,
                'title' => "Estratégia de Gobierno" ,
                'description' => "Este formulario evaluará el alcace de la alineación de las proporidades estratégicas y de la tecnología sumado a la Gobernanza e indicadores de transformación digital",
                'status' =>1 ,
                'dimension_id' =>1 ,
            ],
            [
                'id' => 2,
                'title' => "Clientes" ,
                'description' => "Este formulario evaluará el alcance de la organización para mantener la relación con el cliente a nives de evaluar al cliente como centro, el marketing digital y la gestión de comunidades y redes en el ecosistema digital",
                'status' =>1 ,
                'dimension_id' =>2 ,
            ],
            [
                'id' => 3,
                'title' => "Modelos de Negocio" ,
                'description' => "Este formulario evaluará el alcance de la organización en su modelo de negocio digital, la gestión de la reputación y marca, además de la estratégia con la red de socios aliados y complementadores.",
                'status' =>1 ,
                'dimension_id' =>3 ,
            ],
            [
                'id' => 4,
                'title' => "Organización" ,
                'description' => "Este formulario evaluará el alcance de la organización en su estructura flexible/dinamica, en su gestión de procesos, proyectos, el cómo maneja su comunicación digital y cómo gestiona el conocimiento.",
                'status' =>1 ,
                'dimension_id' => 4 ,
            ],
            [
                'id' => 5,
                'title' => "Cultura" ,
                'description' => "Este formulario evaluará el alcance de la organización en torno a la sensibilidad y agilidad para la adopción de tecnología, la innovación y el liderazgo tecnológico.",
                'status' =>1 ,
                'dimension_id' => 5 ,
            ],
            [
                'id' => 6,
                'title' => "Personas" ,
                'description' => "Este formulario evaluará el alcance de la organización torno a los talentos de cada colaborador, los modelos de gestión humana y la gestión del aprendizaje.",
                'status' =>1 ,
                'dimension_id' => 6 ,
            ],
            [
                'id' => 7,
                'title' => "Tecnología e Inversión" ,
                'description' => "Este formulario evaluará el alcance de la organización teniendo en cuenta su arquitectura tecnológica y gobierno TI, además del manejo de la seguridad de la información, redes conectividad y la inversión que realicen para el desarrollo tecnológico.",
                'status' =>1 ,
                'dimension_id' => 7 ,
            ],
            [
                'id' => 8,
                'title' => "Datos y analítica" ,
                'description' => "Este formulario evaluará el alcance de la organización para el uso de los datos y los posibles modelos analíticos.",
                'status' =>1 ,
                'dimension_id' => 8,
            ],
            
        ]);
    }
}
