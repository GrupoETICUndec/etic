<?php
require_once 'model/Docente.php';

class DocenteController{

    public function docentes(){
        require_once 'view/header.php';
        require_once 'view/docentes.php';
        require_once 'view/footer.php';
    }

    public function perfil(){
        $docente = Docente::getDocente($_GET['idd']);

        require_once 'view/header.php';
        require_once 'view/perfil.php';
        require_once 'view/footer.php';
    }

    public function json()
    {
        $array = Docente::getAll();

        for ($i=0; $i<count($array); $i++) {
            $json_array[] = array(
                                "idDocente" => $array[$i]["idDocente"],
                                "nombre"    => $array[$i]["nombre"],
                                "apellido"  => $array[$i]["apellido"],
                                "email"     => $array[$i]["email"]);
        }
        echo json_encode($json_array);
    }


}
