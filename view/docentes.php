    <main>

        <!--Main layout-->
        <div class="container" ng-app="universidadApp" ng-controller="listadoCtrl">
            <h1>Docentes</h1>

            <div class="row">    
                <input type="text" ng-model="busqueda" class="form-control" placeholder="Buscar...">
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th></th>
                        <th>
                            <a ng-click="columna='nombre'; reverse = !reverse">Nombre</a>
                        </th>
                        <th>
                            <a ng-click="columna='apellido'; reverse = !reverse">Apellido</a>
                        </th>
                        <th>
                            <a ng-click="columna='mail'; reverse = !reverse">Mail</a>
                        </th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr class='clickable-row' data-href='index.php?c=docente&a=perfil&idd={{profe.idDocente}}' dir-paginate="profe in profesores | filter:busqueda | orderBy:columna:reverse | itemsPerPage:50"> 
                        <td><a href='index.php?c=docente&a=perfil&idd={{profe.idDocente}}'><img src="view/images/lupa.jpg" style="width:20px; height:20px;"></a></td>
                        <td>{{profe.nombre}}</td>
                        <td>{{profe.apellido}}</td>
                        <td>{{profe.email}}</td>
                    </tr>
                </tbody>
                
            </table>
    
            <div>
                <div>
                    <dir-pagination-controls boundary-links="true" direction-links="true" ></dir-pagination-controls>
                </div>
            </div>
            <!-- fin del listadoCtrl -->
            
            <hr class="extra-margins">
        </div>
        <!--/.Main layout-->

    </main>
