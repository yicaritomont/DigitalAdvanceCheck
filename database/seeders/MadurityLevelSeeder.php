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
                'visible_name' => "Desafío Inicial",
                'min_range' => 0,
                'max_range' => 0,
                'description' => " Para aquellos que se encuentran en la categoría de desafío inicial, este es un momento emocionante para embarcarse en la exploración de las maravillas de la transformación digital. Visualiza la oportunidad de abrir las puertas a un mundo lleno de posibilidades, donde la tecnología se convierte en la fuerza impulsora que transforma no solo la manera en que trabajamos, sino también cómo vivimos y nos relacionamos con nuestro entorno. En esta etapa inicial, cada paso hacia la adopción de nuevas tecnologías se convierte en la base para un futuro lleno de innovación, eficiencia y un estilo de vida más conectado.No se ha iniciado proceso de transformación, no existe confianza con las herramientas digitales.",
            ],
            [
                'id' => 2,
                'name' => 'Principiante',
                'status' => 1,
                'visible_name' => "Iniciación Digital",
                'min_range' => 1,
                'max_range' => 30,
                'description' => "Los principiantes están dando sus primeros pasos en el fascinante viaje hacia la transformación digital. Desde familiarizarse con herramientas básicas hasta descubrir cómo la tecnología puede simplificar tareas cotidianas, esta etapa inicial se presenta como un emocionante período de descubrimiento. Cada aprendizaje es un paso hacia un mundo digital más amplio, donde las posibilidades de mejora y eficiencia se expanden constantemente. La organización ha iniciado la transformación digital por presión del entorno económico y aún desconoce los beneficios.",

            ],
            [
                'id' => 3,
                'name' => 'Medio',
                'status' => 1,
                'visible_name' => "Optimización Eficiente",
                'min_range' => 31,
                'max_range' => 60,
                'description' => "Para aquellos que tienen la oportunidad de optimizar sus procesos y adoptar soluciones más avanzadas, es un momento emocionante para visualizar cómo la tecnología puede potenciar tu productividad y eficiencia. Imagina cómo cada avance tecnológico se convierte en un catalizador para alcanzar tus metas de manera más efectiva. En esta fase intermedia, la adopción de tecnologías avanzadas se traduce en una ventaja estratégica, donde la eficiencia y la productividad se fusionan para impulsar el éxito y la excelencia operativa. La organización tiene bases de implementación de transformación  y reconoce la necesidad de avanzar y proponer alternativas.",

            ],
            [
                'id' => 4,
                'name' => 'Avanzado',
                'status' =>1,
                'visible_name' => "Innovación Continua",
                'min_range' => 61,
                'max_range' => 100,
                'description' => 'Representa la vanguardia de la transformación digital. En este nivel avanzado, la tecnología se posiciona como un socio estratégico fundamental para impulsar la innovación continua. Desde la implementación de soluciones de vanguardia hasta la adopción ágil de tecnologías emergentes, la madurez digital avanzada no solo impulsa la transformación, sino que también redefine los estándares de excelencia. Este escenario avanzado es un terreno fértil donde la tecnología no solo se adopta, sino que se integra de manera proactiva para liderar la evolución constante y sostenible de la organización hacia nuevos horizontes de éxito. La organización cuenta con implementación de transformación y ve sus beneficios en desempeño y mantienen  transformando procesos según las necesidades.',
            ]
        ]);
    }
}
