<?php

require_once 'model/Carrera.php';

class CarreraController{

    public function show(){
        $carrera = Carrera::getOCarrera($_REQUEST['id']);
        $descripcion = $carrera->getDescripcion();
        $perfil =  $carrera->getPerfil();
        switch ($carrera->getIdCarrera()){
            case 1: // ingeniería
            $ngController="progIngCtrl";
            break;
            case 2: // licenciatura
            $ngController="progLicCtrl";
            break;
            case 3: // tecnicatura
            default:
            $ngController="progTudawCtrl";
            break;
        }
        require_once 'view/header.php';
        require_once 'view/carrera.php';
        require_once 'view/footer.php';
    }

    public function jsonIng()
    {
        $array = Carrera::getPlan(1);
        
        for ($i=0; $i<count($array); $i++) 
        {
            $json_array[] = array(
                                "idPlan"    => $array[$i]["idPlan"],
                                "codigo"    => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["codigo"]),
                                "asignatura"  => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["asignatura"]),
                                "anio"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["anio"]),
                                "regimen"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["regimen"]),
                                "horasPrimerCuatrimestre"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["horasPrimerCuatrimestre"]),
                                "horasSegundoCuatrimestre"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["horasSegundoCuatrimestre"]),
                                "horasAnuales"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["horasAnuales"]),
                                "idMateria"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["idMateria"])
                            );
        }
        echo json_encode($json_array);
    }

    public function jsonLic()
    {
        $array = Carrera::getPlan(2);
        
        for ($i=0; $i<count($array); $i++) 
        {
            $json_array[] = array(
                                "idPlan"    => $array[$i]["idPlan"],
                                "codigo"    => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["codigo"]),
                                "asignatura"  => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["asignatura"]),
                                "anio"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["anio"]),
                                "regimen"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["regimen"]),
                                "horasPrimerCuatrimestre"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["horasPrimerCuatrimestre"]),
                                "horasSegundoCuatrimestre"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["horasSegundoCuatrimestre"]),
                                "horasAnuales"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["horasAnuales"]),
                                "idMateria"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["idMateria"])
                            );
        }
        echo json_encode($json_array);
    }

    public function jsonTudaw()
    {
        $array = Carrera::getPlan(3);
        
        for ($i=0; $i<count($array); $i++) 
        {
            $json_array[] = array(
                                "idPlan"    => $array[$i]["idPlan"],
                                "codigo"    => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["codigo"]),
                                "asignatura"  => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["asignatura"]),
                                "anio"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["anio"]),
                                "regimen"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["regimen"]),
                                "horasPrimerCuatrimestre"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["horasPrimerCuatrimestre"]),
                                "horasSegundoCuatrimestre"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["horasSegundoCuatrimestre"]),
                                "horasAnuales"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["horasAnuales"]),
                                "idMateria"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["idMateria"])
                            );
        }
        echo json_encode($json_array);
    }
}
