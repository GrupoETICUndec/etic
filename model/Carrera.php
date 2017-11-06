<?php require_once 'config/DataBase.php';

class Carrera{
    private $idCarrera;
    private $plan;
    private $name;
    private $descripcion;
    private $perfil;
    
    function __construct($idCarrera, $plan, $name, $descripcion, $perfil){
        $this->setIdCarrera($idCarrera);
        $this->setPlan($plan);
        $this->setName($name);
        $this->setDescripcion($descripcion);
        $this->setPerfil($perfil);
    }


    function getIdCarrera()     { return $this->idCarrera; }
    function setIdCarrera($val) { $this->idCarrera = $val; }

    function getpPlan()      { return $this->plan; }
    function setPlan($val) { $this->plan = $val; }

    function getName()      { return $this->name; }
    function setName($val) { $this->name = $val; }

    function getDescripcion()     { return $this->descripcion; }
    function setDescripcion($val) { $this->descripcion = $val; }

    function getPerfil()     { return $this->perfil; }
    function setPerfil($val) { $this->perfil = $val; }

    static function getCarrera($idCarrera){
        try{
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM carrera WHERE idCarrera = $idCarrera LIMIT 1";
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $resultado = $sta->fetchAll();
            
            return $resultado;
            
        }catch(PDOException $e){
            echo "ERROR";
        }
    }

    static function getOCarrera($id){
        $car = Carrera::getCarrera($id);
        return new Carrera($car[0]['idCarrera'], $car[0]['plan'], $car[0]['nombre'], $car[0]['presentacion'], $car[0]['perfil']);
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
