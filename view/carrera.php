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
	    <?= $descripcion ?>
            </div>
            <!--/.Panel 1-->


            <!--Panel 2-->
            <div class="tab-pane fade" id="panel2" role="tabpanel" ng-app="universidadApp" ng-controller="<?= $ngController ?>">    
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
		<?= $perfil; ?>
            </div>
            <!--/.Panel 3-->
        </div>

        <!--/.Main layout-->

    </main>