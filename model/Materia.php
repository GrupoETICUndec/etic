<?php require_once 'config/DataBase.php';

class Materia
{
    private $idMateria;
    private $nombre;
    
    
    function __construct($idMateria, $nombre)
    {
        $this->setIdMateria($idMateria);
        $this->setNombre($nombre);
    }


    function getIdMateria()
    {
        return $this->idMateria;
    }

    function getnombre()
    {
        return $this->nombre;
    }

    function setIdMateria($idMateria)
    {
        $this->idMateria = $idMateria;
    }

    function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    static function getMateria($idMateria)
    {
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM materia WHERE idMateria = $idMateria LIMIT 1";
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $resultado = $sta->fetchAll();
            
            return $resultado;
        } catch (PDOException $e) {
            echo "ERROR en getMateria(".$sql.")";
        }
    }
    
    static function getAll()
    {
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM materia";
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $resultado = $sta->fetchAll();
            
            return $resultado;
        } catch (PDOException $e) {
            echo "ERROR en getAll(".$sql.")";
        }
    


        function getCorrelatividades()
        {
            try {
                $mdb =  DataBase::getDb();
                $sql = "SELECT p.codigo,m2.asignatura AS correlativa, tc.descripcion
                    FROM materia m
                    INNER JOIN plan p ON m.idMateria = p.idMateria
                    INNER JOIN correlatividad c ON p.idPlan = c.idPlan
                    INNER JOIN tipoCorrelatividad tc ON c.tipoCorrelatividad = tc.idCorrelatividad
                    INNER JOIN materia m2 ON c.esCorrelativaDe = m2.idMateria
                    WHERE m.idMateria =".$this->getIdMateria();
                $sta = $mdb->prepare($sql);
                $sta->execute();
                $resultado = $sta->fetchAll();
            
                return $resultado;
            } catch (PDOException $e) {
                echo "ERROR en getCorrelatividades(".$sql.")";
            }
        }

        function getPrograma($idMateria)
        {
            try {
                $mdb =  DataBase::getDb();
                $sql = "SELECT programa FROM plan WHERE idMateria = $idMateria";
                $sta = $mdb->prepare($sql);
                $sta->execute();
                $resultado = $sta->fetchAll();
            
                return $resultado;
            } catch (PDOException $e) {
                echo "ERROR en getAll(".$sql.")";
            }
        }
    
        function getProgramaResumido($idMateria)
        {
            try {
                $mdb =  DataBase::getDb();
                $sql = "SELECT c.nombre,m.asignatura,p.anio,p.Regimen,c.plan,p.horasAnuales  FROM materia m
                    INNER JOIN plan p ON m.idMateria = p.idMateria
                    INNER JOIN carrera c ON c.idCarrera = p.idCarrera
                    WHERE m.idMateria = $idMateria";
                $sta = $mdb->prepare($sql);
                $sta->execute();
                $resultado = $sta->fetchAll();
            
                return $resultado;
            } catch (PDOException $e) {
                echo "ERROR en getAll(".$sql.")";
            }
        }

        function getEquipo()
        {
            $array = Docente::getEquipo($this->getIdMateria());
            return $array;
        }
    }
}
