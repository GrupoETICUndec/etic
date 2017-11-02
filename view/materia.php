<main>

        <!--Main layout-->
        <div ng-app="universidadApp" ng-controller="matCtrl">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified">
            
            <li class="nav-item">
                {{datos.asignatura}}
            </li>
            
        </ul>

        <!-- Tab panels -->
        <div class="container tab-content card" >

            <!--Panel 1-->
                
                <table class="table table-striped">
                    <tr>
                        <th><a >Carrera</a></th>
                        <th><a >Asignatura</a></th>
                        <th><a >Año</a></th>
                        <th><a >Regimen</a></th>
                        <th><a >Plan</a></th>
                        <th><a >Total Hs</a></th>
                    </tr>

                    <tr>
                        <td>{{mat.carrera}}</td>
                        <td>{{datos.asignatura}}</a></td>
                        <td>{{codigo}}</td>
                        <td>{{mat.regimen}}</td>
                        <td>{{mat.plan}}</td>
                        <td>{{mat.horasTotales}}</td>
                    </tr>
                </table>
            </div>

            <!--/.Panel 1-->
            
            </div>

        <!--/.Main layout-->

    </main>