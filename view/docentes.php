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
                    <tr ng-click="ClickMee(profe);" dir-paginate="profe in profesores | filter:busqueda | orderBy:columna:reverse | itemsPerPage:50"> 
                        <td><i class="fa fa-search-plus" aria-hidden="true"></i></td>
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
