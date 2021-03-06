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
                    <tr><h3><?= $datos[0]["asignatura"]; ?></h3></tr>
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
                    ?>
                            <tr>
                                <td><?= $datos[$i]["nombre"]; ?></td>
                                <td><b><?php if (empty($programa[$i]['programa'])){ echo "- - -"; } else { ?><a href="<?= $programa[$i]['programa']; ?>" target="blank">Ver Programa</a><?php } ?><b></td>
                                <td><?= $datos[$i]["anio"]; ?></td>
                                <td><?= $datos[$i]["Regimen"];?></td>
                                <td><?= $datos[$i]["plan"]; ?></td>
                                <td><?= $datos[$i]["horasAnuales"]; ?></td>
                            </tr>
                    <?php
                        }
                    ?> 

                    
                </table>

                </div>

                <hr>

                <div class="container tab-content card" >

                <table class="table table-hover sombreado">
                    <thead>
                    <tr>
                        <th><h3>Equipo</h3></th>
                    </tr>
                    
                    <tbody>
                    <?php
                        for ($i=0; $i<count($equipo); $i++) {
                            echo "<tr>
                                    <td> 
                                    <a href=\"index.php?c=docente&a=perfil&idd=".$equipo[$i]['idDocente']."\">";
                                        echo strtoupper($equipo[$i]["apellido"].", ".$equipo[$i]["nombre"]);
                            echo " - ". $equipo[$i]["descripcion"]."
                                    </a>
                                    </td>
                                    <td>
                                        ".$equipo[$i]["email"]."
                                    </td>
                                </tr>";
                        }
                    ?>
                    </tbody>   
                </table>
                    
            </div>


            <hr>

            <div class="container tab-content card" >

                <table class="table table-striped sombreado">
                    <tr>
                        <th><h3>Correlatividades</h3></th>
                    </tr>
                </table>
                
                <table class="table table-striped sombreado">
                
                    <tr>
                        <td>
                            <div class=" col-md-3" role="alert">    
                                <h6><ins><strong>Regularizada para Cursar</strong></ins></h6>
                            </div>
                        </td>
                    </tr>    
                    
                    <?php
                    
                        if(empty($regulCursar)){
                            echo "  <tr>
                                        <td>
                                        <a class=\"list-group-item list-group-item-action\">
                                            NINGUNA
                                        </a>
                                        </td> 
                                    </tr>";
                        }

                        else{
                            for ($i=0; $i<count($regulCursar); $i++) {
                                echo "<tr>
                                        <td>
                                            <a class=\"list-group-item list-group-item-action\"
                                            href=\"index.php?c=materia&a=materia&cod=".$regulCursar[$i]["idMateria"]."\">";
                                            echo strtoupper($regulCursar[$i]["codigo"])." - ".
                                            $regulCursar[$i]["correlativa"];
                                            "</a>
                                        </td>"; 
                                echo "</tr>";
                            }
                        }
                    ?>

                    </ul>
                </table>
                    
                <table class="table table-striped sombreado">
                    <tr>
                        <td>
                            <div class=" col-md-3" role="alert">    
                                <h6><ins><strong>Aprobada para Cursar</strong></strong></h6>
                            </div>
                        </td>
                    </tr>

                    <?php

                        if(empty($aprobadaCursar)){
                            echo "  <tr>
                                        <td>
                                        <a class=\"list-group-item list-group-item-action\">
                                            NINGUNA
                                        </a>
                                        </td> 
                                    </tr>";
                        }

                        else{

                            for ($i=0; $i<count($aprobadaCursar); $i++) {
                                echo "<tr>
                                        <td>
                                        
                                        <a class=\"list-group-item list-group-item-action\"
                                        href=\"index.php?c=materia&a=materia&cod=".$aprobadaCursar[$i]["idMateria"]."\">";
                                            echo strtoupper($aprobadaCursar[$i]["codigo"])." - ".
                                            $aprobadaCursar[$i]["correlativa"];
                                        "</a>
                                        
                                        </td>"; 
                                echo "</tr>";

                            }
                        }
                    ?> 
                </table>

                <table class="table table-striped sombreado">
                    <tr>
                        <td>
                            <div class=" col-md-3" role="alert">
                                <h6><ins><strong>Aprobada para Rendir</strong></ins></h6>
                            </div>        
                        </td>
                    </tr>
                    

                    <?php
                        if(empty($aprobadaRendir)){
                            echo "  <tr>
                                        <td>
                                        <a class=\"list-group-item list-group-item-action\">
                                            NINGUNA
                                        </a>
                                        </td> 
                                    </tr>";
                        }

                        else{
                    
                            for ($i=0; $i<count($aprobadaRendir); $i++) {
                                echo "<tr>
                                        <td>
                                        <a class=\"list-group-item list-group-item-action\"
                                        href=\"index.php?c=materia&a=materia&cod=".$aprobadaRendir[$i]["idMateria"]."\">";
                                            echo strtoupper($aprobadaRendir[$i]["codigo"])." - ".
                                            $aprobadaRendir[$i]["correlativa"];
                                        "</a>
                                        </td>"; 
                                echo "</tr>";
                            }
                        }    
                    ?> 
                </table>

            </div>

            <!--/.Panel 1-->
            
            </div>

        <!--/.Main layout-->

    </main>
