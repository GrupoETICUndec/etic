<?php require_once 'config/DataBase.php';

class Carrera{
    private $idCarrera;
    private $name;
    
    function __construct($idCarrera, $name){
        $this->setIdCarrera($idCarrera);
        $this->setName($name);
    }


    function getIdCarrera() {
        return $this->idCarrera;
    }

    function getName() {
        return $this->name;
    }

    function setIdCarrera($idCarrera) {
        $this->idCarrera = $idCarrera;
    }

    function setName($name) {
        $this->name = $name;
    }

    static function getCarrera($idCarrera){
        try{
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM carreras WHERE carreraId = $idCarrera LIMIT 1";
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $resultado = $sta->fetchAll();
            
            return $resultado;
            
        }catch(PDOException $e){
            echo "ERROR";
        }
    }

    static function getPlan($idCarrera){
        try{
            $mdb = DataBase::getDb();
            $sql = "SELECT p.idPlan, p.codigo, m.asignatura, p.regimen, p.horasPrimerCuatrimestre, p.anio, p.horasSegundoCuatrimestre, p.horasAnuales, m.idMateria
                    FROM carrera c
                    INNER JOIN plan p ON p.idCarrera = c.idCarrera
                    INNER JOIN materia m ON p.idMateria = m.idMateria
                    WHERE c.idCarrera = $idCarrera";
            $sta = $mdb->prepare($sql);            
            $sta->execute();
            $resultado = $sta->fetchAll();
            
            return $resultado;
            
        }catch(PDOException $e){
            echo "ERROR";
        }
    }

}
?>
