<main>

        <!--Main layout-->
        <div ng-app="universidadApp" ng-controller="matCtrl">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified">
            
            <li class="nav-item">
                <h1>Asignatura</h1>
            </li>
            
        </ul>

        <!-- Tab panels -->
        <div class="container tab-content card" >

            <!--Panel 1-->
                
                <table class="table table-striped sombreado">
                    <tr><h3><?php echo utf8_encode ($datos[0]["asignatura"]); ?></h3></tr>
                    <tr>
                        <th><a >Carrera</a></th>
                        <th><a >Programa</a></th>
                        <th><a >Año</a></th>
                        <th><a >Regimen</a></th>
                        <th><a >Plan</a></th>
                        <th><a >Total Hs</a></th>
                    </tr>

                    <?php
                        for ($i=0; $i<count($datos); $i++) {
                            echo "<tr>";
                                echo "<td>";
                                    echo utf8_encode ($datos[$i]["nombre"]);      
                                echo "</td>";
                                echo "<td> <b><a href=\"";
                                    echo utf8_encode ($programa[$i]['programa']);      
                                echo "\">Ver Programa</a><b></td>";
                                echo "<td>";
                                    echo utf8_encode ($datos[$i]["anio"]);      
                                echo "</td>";
                                echo "<td>";
                                    echo utf8_encode ($datos[$i]["Regimen"]);      
                                echo "</td>";
                                echo "<td>";
                                    echo utf8_encode ($datos[$i]["plan"]);      
                                echo "</td>";
                                echo "<td>";
                                    echo utf8_encode ($datos[$i]["horasAnuales"]);      
                                echo "</td>";
                            echo "</tr>";
                        }
                    ?> 

                    
                </table>

                </div>

                <hr>

                <div class="container tab-content card" >

                <table class="table table-striped sombreado">
                    <tr>
                        <th><h3>Equipo</h3></th>
                    </tr>

                    <?php
                        for ($i=0; $i<count($equipo); $i++) {
                            echo "<tr>
                                    <td> 
                                    <a href=\"index.php?c=docente&a=perfil&idd=".$equipo[$i]['idDocente']."\">";
                                        echo utf8_encode (strtoupper($equipo[$i]["apellido"].", ".$equipo[$i]["nombre"]));
                            echo " - ".utf8_encode ($equipo[$i]["descripcion"])."
                                    </a></td>
                                </tr>";
                        }
                    ?>   
                </table>

            </div>


            <hr>

            <div class="container tab-content card" >

                <table class="table table-striped sombreado">
                    <tr>
                        <th><h3>Correlatividades</h3></th>
                    </tr>

                    <?php
                        for ($i=0; $i<count($correlativas); $i++) {
                            echo "<tr>
                                    <td>";
                                        echo strtoupper(utf8_encode($correlativas[$i]["correlativa"])).
                                    "</td>";
                            
                            echo    "<td>".
                                        utf8_encode ($correlativas[$i]["descripcion"]);
                            echo "
                                    </td>
                                 </tr>";
                        }
                    ?>   
                </table>

            </div>

            <!--/.Panel 1-->
            
            </div>

        <!--/.Main layout-->

    </main>