<main>

        <!--Main layout-->

        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">Presentación</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">Plan de Estudios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">Perfil Egresado</a>
            </li>
        </ul>

        <!-- Tab panels -->
        <div class="container tab-content card">
            <!--Panel 1-->
            <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                <br>
                <p>
                    <i>La carrera de Ingeniería en Sistemas que se dicta en la Universidad Nacional de Chilecito fue aprobada
                        por Ordenanza N° 173 (20 de diciembre de 2001). Desde esa oportunidad hasta la fecha, las ciencias
                        informáticas y las disciplinas vinculadas a ella como son, por ejemplo, las comunicaciones o la teleinformática
                        han sufrido importantes cambios tecnológicos que ameritan una actualización de los planes de estudio
                        vigentes, de forma de poder ofrecerles a los alumnos una currícula más acorde con los tiempos actuales.
                    </i>
                </p>
                <p>El Plan de Carrera tiene en cuenta las exigencias que se establecen para todas las carreras de ingeniería
                    en cuanto a la cantidad total de horas mínimas que se deben cursar y la realización de la denominada
                    Práctica Profesional Supervisada – PPS. Por otra parte se ha considerado muy especialmente la distribución
                    de horas teóricas y prácticas, la capacitación científica y pedagógica del plantel docente, y los niveles
                    de exigencias que permitan la adecuada promoción de materias, y la asignación de horas de forma que los
                    contenidos mínimos de las mismas puedan ser dictados en forma efectiva y completa. Se mantienen los conceptos
                    básicos bajo los cuales esta carrera fue creada, formar un profesional tecnológico capacitado para desarrollar
                    sistemas de ingeniería y tecnología afines a los existentes y producir innovaciones; capaz de analizar
                    y evaluar requerimientos de procesamientos de información, y sobre esa base, desarrollar, diseñar, organizar,
                    implementar y controlar sistemas informáticos, al servicio de múltiples necesidades de información, de
                    las organizaciones y de todas las profesiones con las que deberá interactuar con versatilidad y vocación
                    de servicio interdisciplinario. Además, que reciba una formación integral en materias técnicas y humanísticas
                    que lo habilite para responder a las demandas de una sociedad que exige del mismo un marcado compromiso
                    con la preservación del medio ambiente; el mejoramiento de la calidad de vida en general y una gran responsabilidad
                    social en el quehacer profesional.</p>
                <p>
                    <b>Objetivos</b>
                </p>
                <p>La Carrera de Ingeniería en Sistemas tiene como fin formar un Ingeniero tecnológico capacitado para desarrollar
                    sistemas de ingeniería y tecnología afines a los existentes y producir innovaciones. Se propone formar
                    un profesional capaz de analizar y evaluar requerimientos de procesamientos de información, y sobre esa
                    base, desarrollar, diseñar, organizar, implementar y controlar sistemas informáticos, al servicio de
                    múltiples necesidades de información, de las organizaciones y de todas las profesiones con las que deberá
                    interactuar con versatilidad y vocación de servicio interdisciplinario. La preparación integral recibida
                    en materias técnicas y humanísticas lo habilita para responder a las demandas de una sociedad que exige
                    de un Ingeniero un marcado compromiso con la preservación del medio ambiente, el mejoramiento de la calidad
                    de vida en general y una gran responsabilidad social en el quehacer profesional.
                </p>

            </div>
            <!--/.Panel 1-->


            <!--Panel 2-->
            <div class="tab-pane fade" id="panel2" role="tabpanel" ng-app="universidadApp" ng-controller="progIngCtrl">    
                <div class="row">    
                    <input type="text" ng-model="busqueda" class="form-control" placeholder="Buscar...">
                </div>

                <table class="table table-striped">
                    <tr>
                        <th><a ng-click="columna='codigo'; reverse = !reverse">Codigo</a></th>
                        <th><a ng-click="columna='asignatura'; reverse = !reverse">Asignatura</a></th>
                        <th><a ng-click="columna='regimen'; reverse = !reverse">Regimen</a></th>
                        <th><a ng-click="columna='hsCuat1'; reverse = !reverse">Hs Cuat 1</a></th>
                        <th><a ng-click="columna='hsCuat2'; reverse = !reverse">Hs Cuat 2</a></th>
                        <th><a ng-click="columna='hsCuatAn'; reverse = !reverse">Hs Anuales</a></th>
                    </tr>

                    <tr ng-repeat="mat in materias | filter:busqueda | orderBy:columna:reverse">
                        <td>{{mat.codigo}}</td>
                        <td><a href="index.php?c=materia&a=materia&cod={{mat.idMateria}}">{{mat.asignatura}}</a></td>
                        <td>{{mat.regimen}}</td>
                        <td>{{mat.horasPrimerCuatrimestre}}</td>
                        <td>{{mat.horasSegundoCuatrimestre}}</td>
                        <td>{{mat.horasAnuales}}</td>
                    </tr>
                </table>
            </div>
            <!--/.Panel 2-->

            
            <!--Panel 3-->
            <div class="tab-pane fade" id="panel3" role="tabpanel">
                <br>
                <p>Título: Ingeniero en Sistemas</p>
                <p>Se aspira a formar profesionales que, egresados de la UNdeC, deberán estar en condiciones de:</p>
                <ol>
                    <li>Realizar estudios y análisis de factibilidad, planificar, dirigir, realizar y/o evaluar proyectos de
                        relevamiento, análisis, especificación, diseño, desarrollo, implementación, Verificación, validación,
                        puesta a punto, mantenimiento y actualización, para todo tipo de personas físicas o jurídicas, de:
                        Sistemas de Información. Software vinculado indirectamente al hardware y a los sistemas de comunicación
                        de datos. Organización, diseño y funcionamiento de Centros de Procesamiento de Datos. Diseño de aplicaciones
                        gráficas con medios informáticos.</li>
                    <li>Determinar, aplicar y controlar estrategias y políticas de desarrollo de Sistemas de Información y de
                        Software.
                    </li>
                    <li>Evaluar y seleccionar los lenguajes de especificación, herramientas de diseño, procesos de desarrollo,
                        lenguajes de programación y arquitecturas de software relacionados con el punto 1.</li>
                    <li>Evaluar y seleccionar las arquitecturas tecnológicas de procesamiento, sistemas de comunicación de datos,
                        telecomunicaciones y software de base para su utilización en los sistemas de información.</li>
                    <li>Diseñar metodologías y tecnologías para desarrollo de software y los sistemas de información vinculados
                        al punto 1.</li>
                    <li>Organizar y dirigir el área de sistemas de todo tipo de personas físicas o jurídicas, determinar el perfil
                        de los recursos humanos necesarios y contribuir a su selección y formación.</li>
                    <li>Planificar, diseñar, dirigir y realizar la capacitación de usuarios en la utilización del software y
                        sistemas de información vinculados al punto 1.</li>
                    <li>Determinar y controlar el cumplimiento de pautas técnicas, normas y procedimientos que rijan el funcionamiento
                        y la utilización del software y sistemas de información vinculados al punto 1.</li>
                    <li>Elaborar, diseñar, implementar y/o evaluar métodos y normas a seguir en cuestiones de seguridad de la
                        información y los datos procesados, generados y/o transmitidos por el software.</li>
                    <li>Elaborar, diseñar, implementar y/o evaluar métodos y procedimientos de auditoría, aseguramiento de la
                        calidad, seguridad y forensia del software y sistemas de información vinculados al punto 1.</li>
                    <li>Realizar arbitrajes, peritajes y tasaciones referidas a las áreas específicas de su aplicación y entendimiento.</li>
                    <li>Participar en equipos de análisis interdisciplinarios para la comprensión de la problemática relacionada
                        con la ética profesional del ingeniero y la problemática de los derechos humanos.</li>
                </ol>
            </div>
            <!--/.Panel 3-->
        </div>

        <!--/.Main layout-->

    </main>