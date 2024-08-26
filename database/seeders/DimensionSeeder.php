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
                'description' => "<p><strong>Estrategia:</strong> Se refiere a la planificación a largo plazo que guía la dirección y los objetivos de la transformación digital en una organización. Incluye la definición de metas, la asignación de recursos y la creación de un plan de acción para alcanzar esas metas:</p>
                    <p><strong>Gobierno:</strong> Implica la estructura de políticas, procedimientos y controles que aseguran que la estrategia digital se implemente correctamente y de manera eficiente:</p>",
                'additional_info' => "<h3>Aspectos positivos:</h3>
                    <ul>
                        <li><strong>Dirección y enfoque:</strong> Una estrategia clara proporciona un marco para tomar decisiones coherentes y alineadas con los objetivos de la organización.</li>
                        <li><strong>Responsabilidad:</strong> El gobierno asegura que todos los niveles de la organización estén alineados y responsables de cumplir con la estrategia digital.</li>
                        <li><strong>Mitigación de riesgos:</strong> Establece controles y políticas para gestionar los riesgos asociados con la transformación digital.</li>
                    </ul>

                    <h3>Aspectos negativos:</h3>
                    <ul>
                        <li><strong>Falta de visión y dirección clara:</strong> Las organizaciones a menudo carecen de una estrategia digital coherente y unificada, lo que resulta en esfuerzos descoordinados y en la incapacidad de alinear las iniciativas digitales con los objetivos empresariales generales.</li>
                        <li><strong>Inadecuada gobernanza y supervisión:</strong> Sin una estructura de gobierno sólida, los proyectos digitales pueden enfrentar problemas de ejecución, presupuesto y calidad. La falta de supervisión puede llevar a una mala gestión de los recursos y a la falta de responsabilidad.</li>
                        <li><strong>Resistencia a la transformación estratégica:</strong> Las barreras internas para el cambio, como la falta de apoyo de los líderes y la resistencia a modificar la estrategia existente, pueden dificultar la implementación de una transformación digital efectiva.</li>
                    </ul>",
                'factor_id'=> 1,
            ],
            [
                'id' => 2,
                'name' => 'Clientes',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "<p>Se refiere a la experiencia, satisfacción y valor que la organización ofrece a sus clientes a través de canales digitales. Implica entender las necesidades y comportamientos de los clientes para mejorar su interacción con la empresa.</p>",
                'additional_info' =>'<h3>Aspectos positivos:</h3>
                    <ul>
                        <li><strong>Satisfacción del cliente:</strong> Mejorar la experiencia del cliente puede llevar a una mayor satisfacción y lealtad.</li>
                        <li><strong>Competitividad:</strong> Una estrategia centrada en el cliente permite a la organización diferenciarse en el mercado.</li>
                        <li><strong>Ingresos:</strong> Satisfechos y leales, los clientes son más propensos a repetir negocios y recomendar la empresa a otros.</li>
                    </ul>

                    <h3>Aspectos negativos:</h3>
                    <ul>
                        <li><strong>Experiencia del cliente fragmentado:</strong> La falta de una visión unificada del cliente puede llevar a una experiencia de cliente inconsistente y fragmentada a través de diferentes canales y puntos de contacto.</li>
                        <li><strong>Desconocimiento de las necesidades del cliente:</strong> Las organizaciones pueden tener dificultades para comprender y anticipar las necesidades y expectativas cambiantes de los clientes, lo que limita su capacidad para ofrecer soluciones personalizadas y efectivas.</li>
                        <li><strong>Falta de interacción digital:</strong> La ausencia de estrategias digitales efectivas para interactuar y comprometer a los clientes puede reducir la capacidad de la organización para construir relaciones sólidas y mantener la lealtad del cliente.</li>
                    </ul>',
                'factor_id'=> 1,
            ],
            [
                'id' => 3,
                'name' => 'Modelos de Negocio',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "<p>Se refiere a cómo la organización crea, entrega y captura valor utilizando tecnologías digitales. Incluye innovaciones en productos, servicios y procesos que permiten a la empresa operar de manera más eficiente y eficaz.</p>",
                'additional_info' =>'<h3>Aspectos positivos:</h3>
                    <ul>
                        <li><strong>Innovación:</strong> Facilita la creación de nuevos productos y servicios digitales que pueden abrir nuevos mercados.</li>
                        <li><strong>Eficiencia:</strong> Optimiza los procesos operativos, reduciendo costos y mejorando la productividad.</li>
                        <li><strong>Sostenibilidad:</strong> Permite adaptar el negocio a las demandas cambiantes del mercado y las tecnologías emergentes.</li>
                    </ul>

                    <h3>Aspectos negativos:</h3>
                    <ul>
                        <li><strong>Resistencia a la innovación:</strong> La dificultad para adaptar o transformar el modelo de negocio tradicional puede limitar la capacidad de la organización para aprovechar nuevas oportunidades y enfrentar la competencia digital.</li>
                        <li><strong>Ineficiencia en la generación de valor:</strong> La incapacidad para identificar y aplicar modelos de negocio digitales que generen valor de manera eficiente puede afectar negativamente la rentabilidad y la sostenibilidad a largo plazo.</li>
                        <li><strong>Desajuste con el mercado:</strong> Los modelos de negocio que no se alinean con las demandas y tendencias actuales del mercado pueden volverse obsoletos y menos competitivos.</li>
                    </ul>',
                'factor_id'=> 1,
            ],
            [
                'id' => 4,
                'name' => 'Organización',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "<p>Se refiere a la estructura, roles y procesos dentro de la empresa que apoyan la transformación digital. Incluye la coordinación entre diferentes departamentos y niveles jerárquicos.</p>",
                'additional_info' =>'<h3>Aspectos positivos:</h3>
                    <ul>
                        <li><strong>Agilidad:</strong> Una estructura organizativa flexible permite una rápida adaptación a los cambios del mercado.</li>
                        <li><strong>Eficiencia:</strong> Claros roles y responsabilidades aseguran que los proyectos digitales se ejecuten de manera eficiente.</li>
                        <li><strong>Colaboración:</strong> Promueve la cooperación interdepartamental, esencial para iniciativas digitales integradas.</li>
                    </ul>

                    <h3>Aspectos negativos:</h3>
                    <ul>
                        <li><strong>Estructura organizativa rígida:</strong> Las estructuras organizativas tradicionales y rígidas pueden impedir la agilidad y la adaptabilidad necesarias para una transformación digital efectiva.</li>
                        <li><strong>Problemas de comunicación interna:</strong> La falta de comunicación y colaboración entre departamentos puede dificultar la integración de iniciativas digitales y la implementación de soluciones tecnológicas.</li>
                        <li><strong>Gestión del cambio deficiente:</strong> La incapacidad para gestionar eficazmente el cambio organizacional puede llevar a una implementación ineficaz de nuevas tecnologías y procesos.</li>
                    </ul>',
                'factor_id'=> 2,
            ],
            [
                'id' => 5,
                'name' => 'Cultura',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "<p>Se refiere a los valores, creencias y comportamientos compartidos dentro de la organización que apoyan o dificultan la transformación digital.</p>",
                'additional_info' =>'<h3>Aspectos positivos:</h3>
                    <ul>
                        <li><strong>Adaptabilidad:</strong> Una cultura que valora la innovación y el cambio facilita la adopción de nuevas tecnologías y procesos.</li>
                        <li><strong>Compromiso:</strong> Los empleados comprometidos son más propensos a participar activamente en iniciativas digitales.</li>
                        <li><strong>Resistencia al cambio:</strong> La cultura organizacional puede ser un obstáculo significativo si no apoya la transformación digital.</li>
                    </ul>

                    <h3>Aspectos negativos:</h3>
                    <ul>
                        <li><strong>Resistencia al cambio cultural:</strong> La falta de una cultura que valore y apoye la innovación digital puede obstaculizar la aceptación y adopción de nuevas tecnologías y procesos.</li>
                        <li><strong>Escasa mentalidad digital:</strong> La falta de una mentalidad digital en la organización puede limitar la creatividad y la disposición a explorar nuevas formas de hacer negocios.</li>
                        <li><strong>Desaliento a la experimentación:</strong> Una cultura que penaliza el fracaso o desalienta la experimentación puede inhibir la innovación y la adaptación a las nuevas tecnologías.</li>
                    </ul>',
                'factor_id'=> 2,
            ],
            [
                'id' => 6,
                'name' => 'Personas',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "<p>Se refiere a las habilidades, conocimientos y competencias de los empleados necesarios para llevar a cabo la transformación digital. Incluye la formación y el desarrollo continuo.</p>",
                'additional_info' =>'<h3>Aspectos positivos:</h3>
                    <ul>
                        <li><strong>Capacidades:</strong> Los empleados con habilidades digitales adecuadas son cruciales para implementar y mantener nuevas tecnologías.</li>
                        <li><strong>Motivación:</strong> Un enfoque en el desarrollo profesional puede aumentar la motivación y retención de empleados.</li>
                        <li><strong>Innovación:</strong> Un equipo capacitado puede contribuir con ideas innovadoras y mejorar los procesos existentes.</li>
                    </ul>

                    <h3>Aspectos negativos:</h3>
                    <ul>
                        <li><strong>Falta de habilidades digitales:</strong> La ausencia de habilidades digitales adecuadas entre los empleados puede limitar la capacidad de la organización para implementar y aprovechar las tecnologías digitales.</li>
                        <li><strong>Resistencia al aprendizaje:</strong> La resistencia a aprender nuevas habilidades o adoptar nuevas herramientas puede obstaculizar el progreso en la transformación digital.</li>
                        <li><strong>Desalineación de roles y competencias:</strong> La falta de alineación entre los roles y las competencias digitales necesarias puede llevar a una ejecución ineficaz de proyectos digitales.</li>
                    </ul>',
                'factor_id'=> 2,
            ],
            [
                'id' => 7,
                'name' => 'Tecnología e Inversión',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "<p>Se refiere a las herramientas, plataformas y sistemas tecnológicos que la organización adopta y el presupuesto asignado para su implementación y mantenimiento.</p>",
                'additional_info' =>'<h3>Aspectos positivos:</h3>
                    <ul>
                        <li><strong>Habilitación:</strong> La tecnología es el motor que permite la transformación digital, proporcionando las herramientas necesarias para innovar y optimizar procesos.</li>
                        <li><strong>Retorno de inversión:</strong> La inversión adecuada en tecnología puede resultar en ahorros de costos y aumento de ingresos.</li>
                        <li><strong>Escalabilidad:</strong> Las soluciones tecnológicas adecuadas permiten a la organización crecer y adaptarse a futuras demandas.</li>
                    </ul>

                    <h3>Aspectos negativos:</h3>
                    <ul>
                        <li><strong>Inversión insuficiente:</strong> La falta de inversión en tecnologías modernas y herramientas digitales puede limitar la capacidad de la organización para competir en el mercado y mejorar su eficiencia operativa.</li>
                        <li><strong>Tecnologías desactualizadas:</strong> El uso de tecnologías obsoletas puede reducir la capacidad de la organización para adoptar nuevas soluciones y adaptarse a las demandas del mercado.</li>
                        <li><strong>Integración deficiente:</strong> La falta de integración efectiva entre sistemas y plataformas puede conducir a procesos ineficientes y a una visión fragmentada de la información.</li>
                    </ul>',
                'factor_id'=> 3,
            ],
            [
                'id' => 8,
                'name' => 'Datos y Analítica',
                'status' => 1,
                'min_range' => '0',
                'max_range' => '12.5',
                'description' => "<p>Se refiere a la capacidad de la organización para recolectar, analizar y utilizar datos para tomar decisiones informadas. Incluye tecnologías de análisis de datos y gestión de la información.</p>",
                'additional_info' =>'<h3>Aspectos positivos:</h3>
                    <ul>
                        <li><strong>Toma de decisiones:</strong> Los datos precisos y el análisis robusto permiten tomar decisiones basadas en evidencia, mejorando la eficiencia y efectividad.</li>
                        <li><strong>Personalización:</strong> Facilita la personalización de productos y servicios según las necesidades del cliente.</li>
                        <li><strong>Competitividad:</strong> Las organizaciones que aprovechan los datos y la analítica pueden identificar oportunidades y amenazas más rápidamente, manteniéndose competitivas en el mercado.</li>
                    </ul>

                    <h3>Aspectos negativos:</h3>
                    <ul>
                        <li><strong>Datos fragmentados:</strong> La falta de integración y centralización de datos puede dificultar la obtención de una visión completa y precisa del negocio, afectando la toma de decisiones.</li>
                        <li><strong>Calidad de datos deficiente:</strong> La presencia de datos incompletos, inexactos o desactualizados puede llevar a análisis erróneos y decisiones mal fundamentadas.</li>
                        <li><strong>Capacidad analítica limitada:</strong> La falta de herramientas y habilidades adecuadas para analizar y extraer valor de los datos puede limitar la capacidad de la organización para obtener insights significativos y tomar decisiones basadas en datos.</li>
                    </ul>',
                'factor_id'=> 3,
            ],
            
        ]);
    }
}
