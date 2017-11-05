<?php require_once 'config/DataBase.php';

class Materia
{
    private $idMateria;
    private $nombre;
    
   
    function __construct($idMateria)
    {
        $this->idMateria=$idMateria;
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
    }


    function getCorrelatividades($idMateria, $tipo)
    {
        try {
            $mdb =  DataBase::getDb();
            $sql = "SELECT p.codigo,m.asignatura AS correlativa, tc.descripcion, p.idMateria
                    FROM correlatividad c
                    INNER JOIN plan p ON c.idPlan = p.idPlan
                    INNER JOIN  materia m ON p.idMateria = m.idMateria
                    INNER JOIN tipoCorrelatividad tc ON c.tipoCorrelatividad = tc.idCorrelatividad
                    WHERE c.esCorrelativaDe = $idMateria AND c.tipoCorrelatividad = $tipo";
                   
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $resultado = $sta->fetchAll();
            
            return $resultado;
        } catch (PDOException $e) {
            echo "ERROR en getCorrelatividades(".$sql.")";
        }
    }

    static function getPrograma($idMateria)
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
    
    static function getProgramaResumido($idMateria)
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

    static function getEquipo($idMateria)
    {
        try {
            $mdb =  DataBase::getDb();
            
            $sql = "SELECT d.idDocente, d.nombre,d.apellido,c.descripcion, d.email 
                    FROM equipo e 
                    INNER JOIN materia m ON e.idMateria = m.idMateria 
                    INNER JOIN Docente d ON e.idDocente = d.idDocente 
                    INNER JOIN categoria c ON d.categoria = c.idCategoria 
                    WHERE m.idMateria = $idMateria";

            $sta = $mdb->prepare($sql);
            $sta->execute();
            $resultado = $sta->fetchAll();
            
            return $resultado;
        } catch (PDOException $e) {
            echo "ERROR en getAll(".$sql.")";
        }

        /*
        $array = Docente::getEquipo($this->getIdMateria());
        return $array;*/
    }
}
