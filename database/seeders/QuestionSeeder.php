<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question')->insert( [
            //Preguntas para estrategia de gobierno (5)
            [
                'id' => 1 , 
                'statement' => '¿Forma y administra alianzas o acuerdos con entidades públicas o privadas a nivel territorial o nacional para la transferencia de conocimientos, tecnología o el desarrollo de proyectos específicamente destinados a la transformación digital?', 
                'status' => 1 , 
                'form_id' => 1 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 2 , 
                'statement' => '¿La empresa invierte o le gustaría invertir en capacitación interna para asegurar que las tecnologías sean aceptadas y utilizadas?', 
                'status' => 1 , 
                'form_id' => 1 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 3 , 
                'statement' => '¿La estrategia competitiva de la empresa está basada en estrategias digitales?', 
                'status' => 1 , 
                'form_id' => 1 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 4 , 
                'statement' => '¿La información de su empresa vive en la nube?', 
                'status' => 1 , 
                'form_id' => 1 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 5 , 
                'statement' => '¿Se entiende de forma adecuada el concepto de transformacion digital y el impacto de su implementación en la empresa?', 
                'status' => 1 , 
                'form_id' => 1 , 
                'help_information' => 'update help text to this question', 
            ],
            // PREGUNTAS CLIENTE (5)
            [
                'id' => 6 , 
                'statement' => '¿La empresa utiliza mecanismos digitales para interactuar con el cliente?', 
                'status' => 1 , 
                'form_id' => 2 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 7 , 
                'statement' => '¿Evalúa de manera periódica las características de su producto en comparación con los de la competencia y establece las características diferenciales?', 
                'status' => 1 , 
                'form_id' => 2 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 8 , 
                'statement' => '¿Existen hoy en día herramientas que posibiliten medir la satisfacción final del cliente?', 
                'status' => 1 , 
                'form_id' => 2 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 9 , 
                'statement' => '¿Realiza un monitoreo regular y formal de la percepción de los clientes acerca de sus productos y las variables asociadas, implementando planes dirigidos a cerrar posibles brechas identificadas?', 
                'status' => 1 , 
                'form_id' => 2 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 10 , 
                'statement' => '¿La empresa cuenta con un proceso para reconocer, identificar y clasificar a los clientes, evaluándolos conforme a este procedimiento que integra el diseño de los planes de comercialización y ventas?', 
                'status' => 1 , 
                'form_id' => 2 , 
                'help_information' => 'update help text to this question', 
            ],
            //PREGUNTAS MODELOS DE NEGOCIO (5)
            [
                'id' => 11 , 
                'statement' => '¿Realiza actividades para detectar, identificar y clasificar nuevos mercados u oportunidades de negocio? ¿Además, anticipa el futuro de su industria y elabora un plan para prepararse frente a esos escenarios?', 
                'status' => 1 , 
                'form_id' => 3 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 12 , 
                'statement' => '¿Se efectúan acercamientos regulares y formales con proveedores, y se exploran con regularidad aliados potenciales o proveedores sustitutos?', 
                'status' => 1 , 
                'form_id' => 3 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 13 , 
                'statement' => '¿Se evidencia que la empresa desarrolla un plan de visitas con clientes, proveedores o interesados, y la comunicación constante?', 
                'status' => 1 , 
                'form_id' => 3 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 14 , 
                'statement' => '¿Han implementado estrategias de comercio electrónico o marketplaces en línea?', 
                'status' => 1 , 
                'form_id' => 3 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 15 , 
                'statement' => '¿La empresa ha diversificado su oferta de productos o servicios a través de la digitalización?', 
                'status' => 1 , 
                'form_id' => 3 , 
                'help_information' => 'update help text to this question', 
            ],
            // PREGUNTAS ORGANIZACIÓN (5)
            [
                'id' => 16 , 
                'statement' => '¿La empresa documenta los aspectos técnicos de su operación, establece procedimientos, políticas y manuales que son el resultado de las experiencias y vivencias de la empresa en el desarrollo de su objeto?', 
                'status' => 1 , 
                'form_id' => 4 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 17 , 
                'statement' => '¿La empresa cuenta con un presupuesto para gastos y costos, implementa planes para mejorar su eficiencia, realiza un seguimiento y realiza ajustes según los resultados operativos obtenidos?', 
                'status' => 1 , 
                'form_id' => 4 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 18 , 
                'statement' => '¿La empresa cuenta con un plan de entrenamiento y capacitación que responde a los requerimientos y retos planteados por la operación?', 
                'status' => 1 , 
                'form_id' => 4 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 19 , 
                'statement' => '¿Se fomenta la colaboración y la comunicación entre los equipos a través de herramientas digitales?', 
                'status' => 1 , 
                'form_id' => 4 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 20 , 
                'statement' => '¿La estructura organizacional permite la rápida adaptación a cambios tecnológicos y del mercado?', 
                'status' => 1 , 
                'form_id' => 4 , 
                'help_information' => 'update help text to this question', 
            ],
            // PREGUNTAS DE CULTURA (5)
            [
                'id' => 21 , 
                'statement' => '¿La empresa ha adoptado metodologías ágiles o enfoques similares en su forma de trabajar?', 
                'status' => 1 , 
                'form_id' => 5 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 22 , 
                'statement' => '¿La empresa cuenta con un repositorio de programas y proyectos que abarcan áreas destinadas a potenciar el uso de la tecnología para alcanzar sus metas y objetivos?', 
                'status' => 1 , 
                'form_id' => 5 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 23 , 
                'statement' => '¿Se establecen programas que impliquen tiempo y recursos para que los empleados de la empresa puedan desarrollar sus habilidades con nuevos conocimientos digitales?', 
                'status' => 1 , 
                'form_id' => 5 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 24 , 
                'statement' => '¿Bajo la dirección del líder o responsable de tecnologías de la información, la empresa analiza y evalúa de manera continua la viabilidad de adoptar tendencias tecnológicas para abordar las problemáticas que enfrenta?', 
                'status' => 1 , 
                'form_id' => 5 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 25 , 
                'statement' => 'La empresa realiza formación permanente en sus lideres, con relación a la gestión  y liderazgo de equipos de trabajo para lograr mejores niveles de desempeño.', 
                'status' => 1 , 
                'form_id' => 5 , 
                'help_information' => 'update help text to this question', 
            ],
            // PREGUNTAS PERSONA (5)
            [
                'id' => 26 , 
                'statement' => '¿Realiza evaluaciones periódicas de las competencias técnicas y habilidades, y cuenta con un sistema establecido para evaluar el desempeño?', 
                'status' => 1 , 
                'form_id' => 6 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 27 , 
                'statement' => '¿Cuenta con un procedimiento definido para la selección de personal, el cual sigue criterios basados en perfiles, competencias, habilidades y requisitos del equipo de trabajo?', 
                'status' => 1 , 
                'form_id' => 6 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 28 , 
                'statement' => '¿Se promueve la mentalidad de aprendizaje continuo y adaptabilidad frente a cambios tecnológicos?', 
                'status' => 1 , 
                'form_id' => 6 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 29 , 
                'statement' => '¿La empresa tiene políticas de recursos humanos que respaldan la retención y atracción de talento digital?', 
                'status' => 1 , 
                'form_id' => 6 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 30 , 
                'statement' => '¿Se fomenta la participación en comunidades y redes profesionales relacionadas con la industria digital?', 
                'status' => 1 , 
                'form_id' => 6 , 
                'help_information' => 'update help text to this question', 
            ],
            // PREGUNTAS TECNOLOGIA E INVERSION
            [
                'id' => 31 , 
                'statement' => '¿Cuentas con una herramienta de comunicación instantánea corporativa? (Slack, Teams, otro)', 
                'status' => 1 , 
                'form_id' => 7 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 32 ,
                'statement' => '¿Tus usuarios utilizan las herramientas tecnológicas que les son proporcionadas?', 
                'status' => 1 , 
                'form_id' => 7 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 33 ,
                'statement' => '¿Se implementan iniciativas de ciberseguridad de manera proactiva para proteger los activos digitales de la empresa?', 
                'status' => 1 , 
                'form_id' => 7 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 34 ,
                'statement' => '¿La empresa cuenta con una infraestructura tecnológica actualizada y compatible con las últimas tendencias digitales?', 
                'status' => 1 , 
                'form_id' => 7 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 35 ,
                'statement' => '¿La empresa utiliza soluciones de computación en la nube para mejorar la escalabilidad y la flexibilidad de sus operaciones?', 
                'status' => 1 , 
                'form_id' => 7 , 
                'help_information' => 'update help text to this question', 
            ],
            // PREGUNTAS DATOS Y ANALITICA (5)
            [
                'id' => 36 ,
                'statement' => '¿La empresa tiene la capacidad para determinar, establecer y ejecutar procesos de automatización de datos?', 
                'status' => 1 , 
                'form_id' => 8 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 37 ,
                'statement' => '¿La empresa emplea técnicas y tecnologías para realizar análisis de datos prescriptivos a partir de datos estructurados provenientes de fuentes internas, como sistemas de información y hojas de cálculo, manejando volúmenes de datos bajos?', 
                'status' => 1 , 
                'form_id' => 8 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 38 ,
                'statement' => '¿Han adoptado estrategias de análisis predictivo para anticipar tendencias y comportamientos?', 
                'status' => 1 , 
                'form_id' => 8 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 39 ,
                'statement' => '¿Fomentan la toma de decisiones basada en datos en todos los niveles de la organización?', 
                'status' => 1 , 
                'form_id' => 8 , 
                'help_information' => 'update help text to this question', 
            ],
            [
                'id' => 40 ,
                'statement' => '¿La empresa utiliza KPIs y métricas específicas para evaluar el rendimiento basado en datos?', 
                'status' => 1 , 
                'form_id' => 8 , 
                'help_information' => 'update help text to this question', 
            ],
        ]);

    }
}
