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
                <p class="lead">
                    La carrera de <strong>Licenciatura en Sistemas</strong> tiene como fin formar profesionales con un perfil que responda a las exigencias del mercado y de las empresas, que, continuamente, actualizan sus recursos tecnológicos y procesos de administración y gestión informática. Por tal motivo el plan fue diseñado para brindar una sólida formación básica en áreas específicas como gestión e ingeniería de software, programación, diseño y análisis de sistemas, redes y asignaturas que permiten la adquisición de una formación continuamente actualizada que facilita la inserción laboral en forma inmediata. La preparación integral recibida en materias técnicas y humanísticas lo habilita para responder a las demandas de una sociedad que exige de un profesional con un marcado compromiso con la preservación del medio ambiente, el mejoramiento de la calidad de vida en general y una gran responsabilidad social en el quehacer profesional.
                </p>
            </div>
            <!--/.Panel 1-->


            <!--Panel 2-->
            <div class="tab-pane fade" id="panel2" role="tabpanel" ng-app="universidadApp" ng-controller="progLicCtrl">
                
                <div class="row">    
                    <input type="text" ng-model="busqueda" class="form-control" placeholder="Buscar...">
                </div>

                <table class="table table-striped">
                    <tr>
                        <th>Codigo</th>
                        <th>Asignatura</th>
                        <th>Año</th>
                        <th>Regimen</th>
                        <th>Hs Cuat 1</th>
                        <th>Hs Cuat 2</th>
                        <th>Hs Anuales</th>
                    </tr>
                    
                    <tr ng-repeat="mat in materias | filter:busqueda ">
                        <td >{{mat.codigo}}</td>
                        <td><a href="index.php?c=materia&a=materia&cod={{mat.idPlan}}">{{mat.asignatura}}</a></td>
                        <td>{{mat.anio}}</td>
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
                <p class="lead">Se aspira a formar profesionales con significativos fundamentos teóricos de Informática y conocimiento actualizado de las tecnologías, de modo de orientarse especialmente al mercado profesional vinculado con los Sistemas Informáticos, en particular los aspectos propios del manejo de software y datos dentro de una organización. El graduado estará en condiciones de participar en actividades de Investigación, Desarrollo y Transferencia dentro de la disciplina. Asimismo los egresados de UNdeC, estarán en condiciones de:</p>
                <ol>
                <li>Planificar, dirigir, realizar y/o evaluar proyectos de relevamiento de problemas del mundo real, especificación formal de los mismos, diseño, implementación, prueba, verificación, validación, mantenimiento y control de calidad de sistemas de software que se ejecuten sobre sistemas de procesamiento de datos.</li>
                <br>
                <li>Organizar, dirigir y controlar las áreas informáticas de las organizaciones, seleccionando y capacitando al personal técnico de los mismos.</li>
                <br>
                <li>Dirigir el relevamiento y análisis de los procesos funcionales de una Organización, con la finalidad de dirigir proyectos de diseño de Sistemas de Información asociados, así como los Sistemas de Software que hagan a su funcionamiento. Determinar, regular y administrar las pautas operativas y reglas de control que hacen al funcionamiento de las áreas informáticas de las empresas y organizaciones.</li>
                <br>
                <li>Entender, planificar y/o participar de los estudios técnicos-económicos de factibilidad y/o referentes a la configuración y dimensionamiento de sistemas de procesamiento de información. Supervisar la implantación de los sistemas de información y organizar y capacitar al personal afectado por dichos sistemas.</li>
                <br>
                <li>Establecer métricas y normas de calidad y seguridad de software, controlando las mismas a fin de tener un producto industrial que respete las normas nacionales e internacionales.</li>
                <br>
                <li>Control de la especificación formal del producto, del proceso de diseño, desarrollo, implementación y mantenimiento. Establecimiento de métricas de validación y certificación de calidad.</li>
                <br>
                <li>Planificar, dirigir, realizar y/o evaluar los sistemas de seguridad en el almacenamiento y procesamiento de la información. Establecer y controlar las metodologías de procesamiento de datos orientadas a seguridad, incluyendo data-warehousing.</li>
                <br>
                <li>Efectuar las tareas de Auditoría de los Sistemas Informáticos. Participar de arbitrajes, pericias y tasaciones relacionados con los Sistemas Informáticos. 9. Planificar, dirigir, realizar y/o evaluar proyectos de sistemas de administración de recursos. Diseño, implementación, prueba, verificación, validación, mantenimiento y control de eficiencia/ calidad de los sistemas de administración de recursos que se implanten como software sobre sistemas de procesamiento de datos. 10. Analizar y evaluar proyectos de especificación, diseño, implementación, verificación, puesta a punto, mantenimiento y actualización de sistemas de procesamiento de datos.</li>
                <br>
                <li>Participar de proyectos de especificación, diseño, implementación, verificación, puesta a punto y mantenimiento de redes de comunicaciones que vinculen sistemas de procesamiento de datos.</li>
                <br>
                <li>Realizar tareas como docente universitario en Informática en todos los niveles, de acuerdo a la jerarquía de título de grado máximo. Realizar tareas de enseñanza de la especialidad en todos los niveles educativos. Planificar y desarrollar cursos de actualización profesional y capacitación en general en Sistemas de Información.</li>
                <br>
                <li>Realizar tareas de investigación científica básica y aplicada en temas de Sistemas de Software y Sistemas de Información, participando como Becario, Docente-Investigador o Investigador Científico/ Tecnológico.</li>
                <br>
                <li>Dirigir Proyectos, Laboratorios, Centros e Institutos de Investigación y Desarrollo en Informática orientados a las áreas de Sistemas de Información.</li>
                
                </ol>
            </div>
            <!--/.Panel 3-->
        </div>

        <!--/.Main layout-->

    </main>