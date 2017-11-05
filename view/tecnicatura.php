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
                <p class="lead">Esta carrera tiene como objetivo general formar profesionales en Informática capaces de trabajar en estrecha relación con otros profesionales informáticos y de distintas disciplinas, a los efectos de satisfacer requerimientos vinculados con el desarrollo, planificación, diseño, ejecución y control de sistemas informáticos complejos, en particular, desarrollos informáticos para aplicaciones web.</p>
            </div>
            <!--/.Panel 1-->


            <!--Panel 2-->
            <div class="tab-pane fade" id="panel2" role="tabpanel" ng-app="universidadApp" ng-controller="progTudawCtrl">
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
                <p class="lead">Prestar asistencia técnica a los profesionales con formación de grado en Informática o Sistemas de Información en tareas relacionadas con estudio, análisis, especificación, diseño, desarrollo, implementación, verificación, validación, puesta a punto, mantenimiento de:</p>
                <ul>
                <li>Aplicaciones Web.</li>
                <br>
                <li>Sistemas de Información (en general).</li>
                <br>
                <li>Diseño de aplicaciones gráficas con medios informáticos.</li>
                <br>
                <li>Participar en el desarrollo de Sistemas de Información y de Software.</li>
                <br>
                <li>Participar en la selección de las arquitecturas tecnológicas de procesamiento, y software para diseño de aplicaciones Web.</li>
                <br>
                <li>Participar en el diseño de metodologías para desarrollo de software vinculados al punto primero.</li>
                
                </ul>
                <br>
                <p class="lead"><strong>Programas de Movilidad</strong></p>
                <ul>
                <li>Programa de Movilidad MACA (Colombia) &#8211; Movilidad Académica Colombia Argentina</li>
                <br>
                <li>Programa de Movilidad Estudiantil del CRISCOS (Paraguay, Perú, Bolivia y Chile) Consejo de Rectores  por la Integración de la Subregión Centro Oeste de Sudamérica.</li>
                </ul>
            </div>
            <!--/.Panel 3-->
        </div>

        <!--/.Main layout-->

    </main>