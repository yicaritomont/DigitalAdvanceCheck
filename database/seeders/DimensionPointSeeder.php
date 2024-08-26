<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DimensionPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('dimension_point')->insert( [
            [
                'min_score' => '0',
                'max_score' => '0',
                'remark' => '<p>&iquest;Por qu&eacute; estoy en el Desaf&iacute;o inicial?</p>
                    <p>La fase de Desaf&iacute;o Inicial representa el punto de partida para muchas organizaciones en su viaje hacia la madurez digital. En esta etapa, las empresas enfrentan obst&aacute;culos como la fragmentaci&oacute;n tecnol&oacute;gica y la falta de alineaci&oacute;n estrat&eacute;gica. La raz&oacute;n principal para encontrarse en esta fase puede ser la ausencia de una estrategia digital integral o la resistencia al cambio cultural. Identificar y comprender por qu&eacute; una organizaci&oacute;n est&aacute; en la etapa de Desaf&iacute;o Inicial es crucial para iniciar un proceso de transformaci&oacute;n efectivo. Puede deberse a la necesidad de superar la reticencia hacia la adopci&oacute;n tecnol&oacute;gica, establecer una visi&oacute;n clara de la transformaci&oacute;n digital y desarrollar una estrategia coherente que aborde las brechas existentes.</p>

                    <ul>
                        <li>Actualmente, solo algunas &aacute;reas utilizan tecnolog&iacute;a de manera fragmentada, lo que resulta en eficiencias limitadas y ahorros elevados</li>
                        <li>Se percibe la ausencia de una estrategia clara, ya que existe un escepticismo generalizado sobre el valor de la tecnolog&iacute;a en la gesti&oacute;n.</li>
                        <li>La cultura organizacional presenta resistencias al cambio y a la adopci&oacute;n tecnol&oacute;gica, lo que puede obstaculizar la integraci&oacute;n efectiva de nuevas herramientas y procesos.</li>
                    </ul>',
                'recomendations' => '<p>Desaf&iacute;o inicial: No es un obst&aacute;culo, sino una oportunidad para desbloquear el potencial digital. Identificar las razones espec&iacute;ficas detr&aacute;s de esta fase permite a las organizaciones dise&ntilde;ar estrategias adaptadas a sus desaf&iacute;os particulares. Puede implicar la implementaci&oacute;n de una cultura digital, la optimizaci&oacute;n de procesos y la creaci&oacute;n de una base tecnol&oacute;gica s&oacute;lida. Reconocer y abordar estos desaf&iacute;os iniciales es esencial para avanzar hacia niveles superiores de madurez digital y aprovechar al m&aacute;ximo las oportunidades que la transformaci&oacute;n digital ofrece:</p>
                    <ul>
                        <li>Desarrollar una estrategia digital integral:
                        <ul>
                            <li>Definir una visi&oacute;n clara y objetivos espec&iacute;ficos para la transformaci&oacute;n digital.</li>
                            <li>Identificar &aacute;reas clave donde la tecnolog&iacute;a puede tener un impacto significativo.</li>
                            <li>Crear un plan de acci&oacute;n detallado que incluya hitos y m&eacute;tricas para medir el progreso.</li>
                        </ul>
                        </li>
                        <li>Fomentar una cultura digital:
                        <ul>
                            <li>Implementar programas de formaci&oacute;n y capacitaci&oacute;n en habilidades digitales.</li>
                            <li>Promover una mentalidad abierta al cambio y a la adopci&oacute;n de nuevas tecnolog&iacute;as.</li>
                            <li>Incentivar la colaboraci&oacute;n y la comunicaci&oacute;n entre diferentes departamentos.</li>
                        </ul>
                        </li>
                        <li>Optimizar procesos b&aacute;sicos:
                        <ul>
                            <li>Realizar una auditor&iacute;a de los procesos actuales para identificar ineficiencias.</li>
                            <li>Introducir herramientas digitales b&aacute;sicas para mejorar la eficiencia operativa.</li>
                            <li>Establecer una base tecnol&oacute;gica s&oacute;lida con infraestructura y sistemas adecuados.</li>
                        </ul>
                        </li>
                    </ul>',
                'best_practice' => '<ul>
                    <li>
                    <p><strong>Adopta un Enfoque Gradual:</strong> Introduce nuevas tecnolog&iacute;as de manera gradual para asegurar una transici&oacute;n suave. Esto permitir&aacute; a los equipos adaptarse sin interrumpir las operaciones diarias.</p>
                    </li>
                    <li>
                    <p><strong>Fomenta la Cultura de Innovaci&oacute;n:</strong> Promueve una cultura que valore la innovaci&oacute;n y el cambio. Incentiva a los empleados a explorar nuevas ideas y a adoptar tecnolog&iacute;as que puedan ofrecer ventajas competitivas.</p>
                    </li>
                    <li>
                    <p><strong>Establece Objetivos Claros:</strong> Define objetivos espec&iacute;ficos y medibles para cada iniciativa digital. Esto ayudar&aacute; a evaluar el progreso y a realizar ajustes seg&uacute;n sea necesario.</p>
                    </li>
                    <li>
                    <p><strong>Facilita la Comunicaci&oacute;n y Colaboraci&oacute;n:</strong> Mejora la comunicaci&oacute;n entre los diferentes departamentos para asegurar una integraci&oacute;n efectiva de las tecnolog&iacute;as digitales. Utiliza herramientas de colaboraci&oacute;n para coordinar esfuerzos y compartir conocimientos.</p>
                    </li>
                </ul>',
                'congrats' => '<p>&iexcl;Felicidades por avanzar a la fase de Iniciaci&oacute;n Digital! Has dado pasos importantes al adoptar tecnolog&iacute;as digitales y al invertir en la infraestructura necesaria. Esta fase es crucial para establecer una base s&oacute;lida para futuras innovaciones y mejoras. Tu compromiso con la capacitaci&oacute;n y la integraci&oacute;n de tecnolog&iacute;as demuestra un enfoque proactivo hacia la transformaci&oacute;n digital.</p>',
                'conclusions' => '<p>La fase de Iniciaci&oacute;n Digital es un per&iacute;odo de descubrimiento y aprendizaje. Aunque ya has hecho avances significativos, el viaje hacia una transformaci&oacute;n digital completa est&aacute; en curso. Aprovecha esta etapa para fortalecer las bases tecnol&oacute;gicas y de gobernanza. La inversi&oacute;n en formaci&oacute;n continua y la mejora de las capacidades digitales te preparar&aacute;n para las siguientes fases de evoluci&oacute;n digital, donde podr&aacute;s alcanzar un mayor nivel de integraci&oacute;n y eficiencia.</p>
                    <p>Contin&uacute;a con el mismo nivel de dedicaci&oacute;n y enfoque, y estar&aacute;s bien posicionado para aprovechar al m&aacute;ximo el potencial de la tecnolog&iacute;a en los pr&oacute;ximos pasos de tu transformaci&oacute;n digital.</p>',
                'madurity_level_id' => '1',

            ],
            [
                'min_score' => '1',
                'max_score' => '30',
                'remark' => '<p>&iquest;Por qu&eacute; estoy en la Iniciaci&oacute;n Digital?</p>
                    <p>Estar en la fase de Iniciaci&oacute;n Digital indica que una organizaci&oacute;n ha tomado pasos significativos hacia la adopci&oacute;n de tecnolog&iacute;as digitales. En esta etapa, las empresas pueden haber implementado soluciones b&aacute;sicas, pero est&aacute;n en la b&uacute;squeda activa de comprender y aprovechar al m&aacute;ximo el potencial de la tecnolog&iacute;a. Es probable que se est&eacute;n realizando inversiones considerables en infraestructura digital, y los equipos est&aacute;n adquiriendo conocimientos esenciales para integrar la tecnolog&iacute;a de manera m&aacute;s efectiva en los procesos existentes.&nbsp;</p>

                    <ul>
                        <li>Las capacidades digitales son convencionales, con un enfoque en la optimizaci&oacute;n y eficiencia de las operaciones.</li>
                        <li>La gobernanza digital se lleva a cabo a trav&eacute;s de ciertas &aacute;reas, lo que puede conducir a una falta de integraci&oacute;n y coordinaci&oacute;n.</li>
                        <li>Se est&aacute;n tomando medidas activas para desarrollar habilidades digitales y fomentar principios de cultura digital, reconociendo la importancia de la evoluci&oacute;n constante en el entorno digital actual.</li>
                    </ul>',
                'recomendations' => '<p>Iniciaci&oacute;n Digital: Implica enfrentar desaf&iacute;os particulares. Puede haber resistencia al cambio y la necesidad de superar barreras culturales dentro de la organizaci&oacute;n. Sin embargo, esta fase representa una oportunidad para construir una base s&oacute;lida para el crecimiento digital futuro. La organizaci&oacute;n est&aacute; en el camino para comprender c&oacute;mo las tecnolog&iacute;as espec&iacute;ficas pueden impulsar la eficiencia y mejorar la experiencia del cliente. A medida que se avanza en esta etapa, el objetivo clave es consolidar los conocimientos adquiridos y prepararse para la fase de Optimizaci&oacute;n Eficiente, donde la madurez digital se traduce en eficiencia y rendimiento mejorados:</p>
                    <ul>
                        <li>Mejorar la integraci&oacute;n tecnol&oacute;gica:
                        <ul>
                            <li>Integrar tecnolog&iacute;as existentes en un sistema cohesivo y coordinado.</li>
                            <li>Asegurar que las diferentes herramientas digitales se comuniquen eficazmente entre s&iacute;.</li>
                            <li>Evaluar y seleccionar nuevas tecnolog&iacute;as que complementen las soluciones existentes.</li>
                        </ul>
                        </li>
                        <li>Superar la resistencia al cambio:
                        <ul>
                            <li>Involucrar a los l&iacute;deres de la organizaci&oacute;n en la promoci&oacute;n de la transformaci&oacute;n digital.</li>
                            <li>Comunicar claramente los beneficios y el impacto positivo de la digitalizaci&oacute;n.</li>
                            <li>Crear un plan de gesti&oacute;n del cambio que incluya el apoyo a los empleados durante la transici&oacute;n.</li>
                        </ul>
                        </li>
                        <li>Enfocarse en la experiencia del cliente:
                        <ul>
                            <li>Analizar las necesidades y expectativas de los clientes para mejorar su experiencia.</li>
                            <li>Implementar tecnolog&iacute;as que faciliten la interacci&oacute;n y el servicio al cliente.</li>
                            <li>Utilizar datos y an&aacute;lisis para personalizar y optimizar las ofertas y servicios.</li>
                        </ul>
                        </li>
                    </ul>',
                'best_practice' => '<ul>
                        <li>
                        <p><strong>Adopta un Enfoque Modular:</strong> Implementa soluciones tecnol&oacute;gicas de manera modular para facilitar la integraci&oacute;n gradual y permitir ajustes seg&uacute;n sea necesario. Esto ayudar&aacute; a minimizar el riesgo y a optimizar el uso de los recursos.</p>
                        </li>
                        <li>
                        <p><strong>Promueve la Colaboraci&oacute;n Interdepartamental:</strong> Fomenta la comunicaci&oacute;n y colaboraci&oacute;n entre los departamentos para asegurar que las iniciativas digitales sean coherentes y efectivas. Utiliza herramientas colaborativas para facilitar el intercambio de informaci&oacute;n y conocimientos.</p>
                        </li>
                        <li>
                        <p><strong>Monitorea y Eval&uacute;a el Progreso:</strong> Realiza evaluaciones peri&oacute;dicas del progreso hacia los objetivos digitales. Usa m&eacute;tricas claras para medir el impacto de las tecnolog&iacute;as implementadas y ajusta las estrategias en funci&oacute;n de los resultados obtenidos.</p>
                        </li>
                        <li>
                        <p><strong>Incentiva la Innovaci&oacute;n:</strong> Crea un entorno que fomente la experimentaci&oacute;n y la innovaci&oacute;n. Anima a los empleados a proponer nuevas ideas y soluciones que puedan mejorar los procesos y operaciones digitales.</p>
                        </li>
                    </ul>',
                'congrats' => '<p>&iexcl;Felicidades por llegar a la fase de Iniciaci&oacute;n Digital! Has logrado dar pasos importantes al adoptar tecnolog&iacute;as digitales y al invertir en la infraestructura necesaria. Este es un testimonio de tu compromiso con la evoluci&oacute;n tecnol&oacute;gica y la mejora continua. Tu enfoque en adquirir conocimientos y desarrollar habilidades digitales es fundamental para el &eacute;xito a largo plazo.</p>',
                'conclusions' => '<p>La fase de Iniciaci&oacute;n Digital marca el comienzo de un viaje hacia una mayor adopci&oacute;n y aprovechamiento de la tecnolog&iacute;a. Aunque ya has logrado avances significativos, hay oportunidades para fortalecer la integraci&oacute;n y maximizar el valor de las inversiones digitales. Al continuar con una estrategia clara, fortalecer la gobernanza digital y promover la formaci&oacute;n continua, estar&aacute;s bien posicionado para avanzar hacia las etapas m&aacute;s avanzadas de la transformaci&oacute;n digital.</p>
                    <p>Sigue construyendo sobre los logros actuales y mant&eacute;n el enfoque en la mejora continua. El camino hacia una transformaci&oacute;n digital exitosa es din&aacute;mico y requiere adaptabilidad, pero tus esfuerzos actuales te preparan para enfrentar los desaf&iacute;os futuros con confianza.</p>',
                'madurity_level_id' => '2',

            ],
            [
                'min_score' => '31',
                'max_score' => '60',
                'remark' => '<p>&iquest;Por qu&eacute; estoy en Optimizaci&oacute;n Eficiente?</p>
                    <p>Estar en la etapa de Optimizaci&oacute;n Eficiente significa que una organizaci&oacute;n ha superado los desaf&iacute;os iniciales y ha establecido una base s&oacute;lida en t&eacute;rminos de infraestructura y procesos digitales. En esta fase, el enfoque principal radica en mejorar la eficiencia operativa y optimizar los recursos disponibles. Las empresas en esta etapa buscan maximizar la utilizaci&oacute;n de tecnolog&iacute;as existentes y desarrollar pr&aacute;cticas avanzadas de gesti&oacute;n de servicios TI. El &eacute;nfasis se coloca en la alineaci&oacute;n de la tecnolog&iacute;a con los objetivos del negocio, garantizando que cada implementaci&oacute;n tenga un impacto positivo en la eficiencia y la productividad.&nbsp;</p>
                    <ul>
                        <li>Existe una alineaci&oacute;n estrat&eacute;gica intermedia en la tecnolog&iacute;a, dando lugar a un ecosistema digital m&aacute;s din&aacute;mico y colaborativo.</li>
                        <li>Automatiza procesos con una visi&oacute;n integradora de extremo a extremo, enfoc&aacute;ndose en la experiencia del cliente como centro de la operaci&oacute;n.</li>
                        <li>La cultura digital est&aacute; en constante desarrollo y evoluci&oacute;n, reflejando un compromiso continuo con la adaptaci&oacute;n y la innovaci&oacute;n en el entorno digital.</li>
                    </ul>',
                'recomendations' => '<p>Optimizaci&oacute;n Eficiente: Es el momento de perfeccionar las operaciones existentes, implementar pr&aacute;cticas de gobierno efectivas y avanzar hacia la innovaci&oacute;n continua. Las organizaciones en esta fase deben evaluar constantemente su postura digital y estar preparadas para ajustar sus estrategias seg&uacute;n las din&aacute;micas cambiantes del mercado. En resumen, la etapa de Optimizaci&oacute;n Eficiente representa un paso crucial en el viaje hacia la madurez digital, donde se sientan las bases para la innovaci&oacute;n y la excelencia sostenibles en la era digital:</p>
                    <ul>
                        <li>Automatizar y optimizar procesos:
                        <ul>
                            <li>Identificar procesos manuales y repetitivos que pueden ser automatizados.</li>
                            <li>Implementar soluciones de automatizaci&oacute;n que aumenten la eficiencia y reduzcan errores.</li>
                            <li>Revisar y mejorar continuamente los procesos para mantener la eficiencia operativa.</li>
                        </ul>
                        </li>
                        <li>Fortalecer la gobernanza digital:
                        <ul>
                            <li>Establecer pol&iacute;ticas y procedimientos claros para la gesti&oacute;n de tecnolog&iacute;as digitales.</li>
                            <li>Asegurar el cumplimiento de regulaciones y est&aacute;ndares de seguridad y privacidad.</li>
                            <li>Monitorizar y evaluar el desempe&ntilde;o de las tecnolog&iacute;as implementadas.</li>
                        </ul>
                        </li>
                        <li>Fomentar una cultura de innovaci&oacute;n:
                        <ul>
                            <li>Promover la experimentaci&oacute;n y la adopci&oacute;n de nuevas tecnolog&iacute;as.</li>
                            <li>Crear equipos multidisciplinarios dedicados a la innovaci&oacute;n y la mejora continua.</li>
                            <li>Establecer un entorno que celebre el aprendizaje y la adaptaci&oacute;n r&aacute;pida a los cambios del mercado.</li>
                        </ul>
                        </li>
                    </ul>',
                'best_practice' => '<ul>
                        <li>
                        <p><strong>Automatiza Procesos Clave:</strong> Identifica y automatiza los procesos operativos clave para reducir el tiempo manual y minimizar errores. La automatizaci&oacute;n puede aumentar significativamente la eficiencia y permitir a los empleados centrarse en tareas de mayor valor.</p>
                        </li>
                        <li>
                        <p><strong>Realiza Revisiones Peri&oacute;dicas:</strong> Implementa un sistema de revisi&oacute;n continua para evaluar el desempe&ntilde;o de las tecnolog&iacute;as y procesos. Realiza ajustes y mejoras basadas en datos y feedback para asegurar que la optimizaci&oacute;n sea efectiva y sostenible.</p>
                        </li>
                        <li>
                        <p><strong>Integra Soluciones de Extremo a Extremo:</strong> Aseg&uacute;rate de que las soluciones digitales se integren completamente en los procesos de negocio, de manera que la informaci&oacute;n fluya sin problemas a trav&eacute;s de la organizaci&oacute;n. Esto ayuda a evitar redundancias y mejora la visibilidad y control de las operaciones.</p>
                        </li>
                        <li>
                        <p><strong>Desarrolla una Cultura de Innovaci&oacute;n Continua:</strong> Promueve una cultura organizacional que valore la innovaci&oacute;n y la mejora continua. Anima a los empleados a buscar y proponer nuevas formas de optimizar procesos y tecnolog&iacute;as, manteniendo a la organizaci&oacute;n a la vanguardia.</p>
                        </li>
                    </ul>',
                'congrats' => '<p>&iexcl;Felicitaciones por alcanzar la etapa de Optimizaci&oacute;n Eficiente! Has superado los desaf&iacute;os iniciales y establecido una base s&oacute;lida para la gesti&oacute;n y utilizaci&oacute;n de tecnolog&iacute;as digitales. Tu enfoque en mejorar la eficiencia operativa y optimizar recursos es un testimonio de tu compromiso con la excelencia y la productividad. Este avance refleja un esfuerzo significativo en la alineaci&oacute;n de la tecnolog&iacute;a con los objetivos del negocio.</p>',
                'conclusions' => '<p>La etapa de Optimizaci&oacute;n Eficiente es crucial para maximizar el impacto de las inversiones tecnol&oacute;gicas y mejorar la eficiencia operativa. A medida que contin&uacute;as en esta fase, es importante mantener el enfoque en la automatizaci&oacute;n, la integraci&oacute;n y la mejora continua. La cultura digital en desarrollo y la alineaci&oacute;n estrat&eacute;gica intermedia proporcionan una base s&oacute;lida para seguir avanzando.</p>
                    <p>Sigue fortaleciendo las pr&aacute;cticas de gesti&oacute;n de TI y optimizaci&oacute;n de procesos, y mant&eacute;n una mentalidad abierta a la innovaci&oacute;n. Estos esfuerzos te posicionar&aacute;n para enfrentar los desaf&iacute;os futuros y aprovechar al m&aacute;ximo las oportunidades que ofrece el entorno digital en constante evoluci&oacute;n.</p>',
                'madurity_level_id' => '3',

            ],
            [
                'min_score' => '61',
                'max_score' => '100',
                'remark' => '<p>&iquest;Por qu&eacute; estoy en Innovaci&oacute;n Continua?</p>
                    <p>Estar en la etapa de Innovaci&oacute;n Continua es un logro significativo que refleja la capacidad de una organizaci&oacute;n para evolucionar constantemente en el mundo digital. Esta fase implica un enfoque proactivo hacia la adopci&oacute;n de tecnolog&iacute;as emergentes y la incorporaci&oacute;n de pr&aacute;cticas innovadoras en todos los aspectos del negocio. Aqu&iacute;, las organizaciones no solo han optimizado sus procesos internos, sino que tambi&eacute;n est&aacute;n a la vanguardia de la implementaci&oacute;n de soluciones avanzadas que impulsan la eficiencia y la excelencia operativa.&nbsp;</p>

                    <ul>
                        <li>Permite mantener y desarrollar un ecosistema digital din&aacute;mico. La tecnolog&iacute;a se posiciona como un elemento transformador del negocio y las personas.</li>
                        <li>La cultura digital ha alcanzado un nivel de madurez, caracterizada por una visi&oacute;n global, flexibilidad y adaptabilidad, siendo un pilar clave para la innovaci&oacute;n continua y el &eacute;xito en el entorno digital.</li>
                    </ul>',
                'recomendations' => '<p>Innovaci&oacute;n Continua: A medida que una organizaci&oacute;n ingresa en la etapa de Innovaci&oacute;n Continua, los l&iacute;deres deben mantenerse &aacute;giles y estar dispuestos a explorar nuevas ideas y enfoques. La innovaci&oacute;n no solo se trata de adoptar tecnolog&iacute;as punteras, sino tambi&eacute;n de fomentar una cultura organizacional que celebra la creatividad y la experimentaci&oacute;n. Estar en esta fase indica que la organizaci&oacute;n no solo ha abrazado el cambio digital, sino que tambi&eacute;n est&aacute; preparada para liderar y dar forma al futuro de su industria a trav&eacute;s de la innovaci&oacute;n constante:</p>
                    <ul>
                        <li>Adoptar tecnolog&iacute;as emergentes:
                        <ul>
                            <li>Mantenerse al tanto de las &uacute;ltimas tendencias y desarrollos tecnol&oacute;gicos.</li>
                            <li>Evaluar y pilotar nuevas tecnolog&iacute;as que puedan ofrecer ventajas competitivas.</li>
                            <li>Escalar r&aacute;pidamente las soluciones exitosas para maximizar su impacto.</li>
                        </ul>
                        </li>
                        <li>Fomentar la creatividad y la experimentaci&oacute;n:
                        <ul>
                            <li>Crear espacios y tiempos dedicados a la ideaci&oacute;n y la experimentaci&oacute;n.</li>
                            <li>Incentivar a los empleados a proponer y probar nuevas ideas sin temor al fracaso.</li>
                            <li>Implementar programas de innovaci&oacute;n abierta que involucren a socios externos y clientes.</li>
                        </ul>
                        </li>
                        <li>Medir y ajustar estrategias constantemente:
                        <ul>
                            <li>Utilizar datos y an&aacute;lisis avanzados para tomar decisiones informadas y &aacute;giles.</li>
                            <li>Realizar revisiones peri&oacute;dicas de la estrategia digital para adaptarla a las condiciones del mercado.</li>
                            <li>Establecer un ciclo continuo de retroalimentaci&oacute;n y mejora para asegurar el progreso constante.</li>
                        </ul>
                        </li>
                    </ul>',
                'best_practice' => '<ul>
                        <li>
                        <p><strong>Promueve una Cultura de Innovaci&oacute;n:</strong> Crea una cultura que valore y recompense la creatividad y la iniciativa. Anima a todos los empleados a contribuir con ideas y soluciones innovadoras, y proporciona el apoyo necesario para implementar y escalar esas ideas.</p>
                        </li>
                        <li>
                        <p><strong>Utiliza Tecnolog&iacute;a de Vanguardia:</strong> Implementa y adapta tecnolog&iacute;as emergentes que puedan proporcionar una ventaja competitiva. Mantente informado sobre las &uacute;ltimas tendencias y eval&uacute;a c&oacute;mo pueden integrarse en la estrategia digital de la organizaci&oacute;n.</p>
                        </li>
                        <li>
                        <p><strong>Mide el Impacto de la Innovaci&oacute;n:</strong> Establece m&eacute;tricas para evaluar el impacto de las iniciativas innovadoras en la eficiencia, la productividad y el crecimiento. Utiliza estos datos para ajustar las estrategias y mejorar los resultados.</p>
                        </li>
                        <li>
                        <p><strong>Asegura la Adaptabilidad Organizacional:</strong> Desarrolla procesos y estructuras que permitan una r&aacute;pida adaptaci&oacute;n a cambios en el mercado y en la tecnolog&iacute;a. La flexibilidad organizacional es clave para mantenerse competitivo en un entorno digital en constante evoluci&oacute;n.</p>
                        </li>
                    </ul>',
                'congrats' => '<p>&iexcl;Felicidades por alcanzar la etapa de Innovaci&oacute;n Continua! Has demostrado una capacidad destacada para evolucionar y adaptarte en el entorno digital, integrando tecnolog&iacute;as avanzadas y pr&aacute;cticas innovadoras en todos los aspectos de tu negocio. Este logro refleja tu compromiso con la excelencia operativa y la vanguardia tecnol&oacute;gica, situando a tu organizaci&oacute;n como l&iacute;der en innovaci&oacute;n.</p>',
                'conclusions' => '<p>La etapa de Innovaci&oacute;n Continua representa la culminaci&oacute;n de un esfuerzo constante por mejorar y evolucionar en el mundo digital. Al estar a la vanguardia de la tecnolog&iacute;a y la innovaci&oacute;n, has creado un ecosistema digital din&aacute;mico que impulsa la eficiencia y el &eacute;xito.</p>
                    <p>Contin&uacute;a fomentando la experimentaci&oacute;n y la adaptabilidad, y sigue invirtiendo en las tendencias emergentes para mantener tu posici&oacute;n como l&iacute;der en la industria. La madurez de la cultura digital y la capacidad de adaptarse a los cambios son fundamentales para el &eacute;xito sostenido en el entorno digital actual.</p>
                    <p>Sigue avanzando con una mentalidad abierta a nuevas posibilidades y desaf&iacute;os, y contin&uacute;a aprovechando las oportunidades que la innovaci&oacute;n ofrece para alcanzar nuevas alturas.</p>',
                'madurity_level_id' => '4',

            ],
        ]);
    }
}
