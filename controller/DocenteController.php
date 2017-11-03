<?php
require_once 'model/Docente.php';

class DocenteController{

    public function docentes(){
        require_once 'view/header.php';
        require_once 'view/docentes.php';
        require_once 'view/footer.php';
    }

    public function perfil(){
        $docente = Docente::getPerfil($_GET['idd']);
        if($docente[0]["telefono"] == null){
            $docente[0]["telefono"] = "Informacion no disponible";
        }
        if($docente[0]["descripcion"] == null){
            $docente[0]["descripcion"] = "Informacion no disponible";
        }
        require_once 'view/header.php';
        require_once 'view/perfil.php';
        require_once 'view/footer.php';
    }

    public function json()
    {
        $array = Docente::getAll();

        for ($i=0; $i<count($array); $i++) {
            $json_array[] = array(
                                "idDocente" => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["idDocente"]),
                                "nombre"    => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["nombre"]),
                                "apellido"  => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["apellido"]),
                                "email"     => iconv('ISO-8859-1', 'UTF-8//IGNORE', $array[$i]["email"]));
        }
        echo json_encode($json_array);
    }


}