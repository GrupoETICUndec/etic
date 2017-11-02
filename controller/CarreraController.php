<?php

require_once 'model/Carrera.php';

class CarreraController{

    public function ingenieria(){
        require_once 'view/header.php';
        require_once 'view/ingenieria.php';
        require_once 'view/footer.php';
    }

    public function licenciatura(){
        require_once 'view/header.php';
        require_once 'view/licenciatura.php';
        require_once 'view/footer.php';
    }
    
    public function tecnicatura(){
        require_once 'view/header.php';
        require_once 'view/tecnicatura.php';
        require_once 'view/footer.php';
    }

    /*
    public function jsonIng()
    {
        $array = Carrera::getPlan(1);
        $json_array = json($array);
        echo json_encode($json_array);
    }  
    */  

    public function jsonIng()
    {
        $array = Carrera::getPlan(1);
        
        for ($i=0; $i<count($array); $i++) 
        {
            $json_array[] = array(
                                "codigo"    => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["codigo"]),
                                "asignatura"  => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["asignatura"]),
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