<?php

require_once 'model/Materia.php';

class MateriaController
{
    public function materia()
    {
        $m = new Materia($_GET['cod']);
        $datos = $m->getProgramaResumido($_GET['cod']);
        $equipo = $m->getEquipo($_GET['cod']);
        $correlativas = $m->getCorrelatividades($_GET['cod']);
        $programa = $m->getPrograma($_GET['cod']);
    

        require_once 'view/header.php';
        require_once 'view/materia.php';
        require_once 'view/footer.php';
    }

    /*
    public function jsonMateria()
    {
        $array = Materia::getMateria(2);
        
        for ($i=0; $i<count($array); $i++) {
            $json_array[] = array(
                                "codigo"    => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["codigo"]),
                                "asignatura"  => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["asignatura"])
                            );
        }
        echo json_encode($json_array);
    }*/
}
