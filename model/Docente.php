<?php 
require_once 'config/DataBase.php';
require_once 'model/Categoria.php';

class Docente{
    private $idDocente;
    private $nombre;
    private $apellido;
    private $categoria;
    private $telefono;
    private $email;
    private $descripcion;
    
    function __construct($idDocente, $nombre, $apellido, $categoria, $telefono, $email, $descripcion){
        $this->setIdDocente($idDocente);
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setCategoria($categoria);
        $this->setTelefono($telefono);
        $this->setEmail($email);
        $this->setDescripcion($descripcion);

    }

    function getIdDocente() { return $this->idDocente; }
    function setIdDocente($idDocente) { $this->idDocente = $idDocente; }

    function getNombre() { return $this->nombre; }
    function setNombre($value) { $this->nombre = $value; }

    function getApellido() { return $this->apellido; }
    function setApellido($apellido) { $this->apellido = $apellido; }


    function getCategoria() { return $this->categoria; }
    function setCategoria($value) { $this->categoria = $value; }
    function getOCategoria() { return Categoria::getCategoria($this->categoria); }

    function getTelefono() { return ($this->telefono == null )? "Informacion no disponible" : $this->telefono; }
    function setTelefono($telefono) { $this->telefono = $telefono; }

    function getEmail() { return ($this->email == null )? "Informacion no disponible" : $this->email; }
    function setEmail($email) { $this->email = $email; }

    function getDescripcion() { return $this->descripcion; }
    function setDescripcion($descripcion) { $this->descripcion = $descripcion; }


    static function getDocente($idDocente){
        try{
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM Docente WHERE idDocente = $idDocente LIMIT 1";
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $r = $sta->fetchAll();
            
            $ob = new Docente($r[0]['idDocente'], 
                              $r[0]['nombre'], 
                              $r[0]['apellido'], 
                              $r[0]['categoria'], 
                              $r[0]['telefono'], 
                              $r[0]['email'], 
                              $r[0]['descripcion']  );
            
            return $ob;
        }catch(PDOException $e){
            echo "ERROR en getDocente(".$sql.")";
        }
    }

    static function getAll(){
        try{
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM Docente";
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $resultado = $sta->fetchAll();
            
            return $resultado;
            
        }catch(PDOException $e){
            echo "ERROR en getAll(".$sql.")";
        }
    }

    static function getEquipo($idMateria){
        try{
            $mdb =  DataBase::getDb();
            $sql = "SELECT nombre, apellido, c.descripcion
                    FROM equipo e
                    INNER JOIN Docente d ON d.idDocente = e.idDocente
                    INNER JOIN categoria c ON c.idCategoria = d.categoria 
                    WHERE e.idMateria = $idMateria";
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $resultado = $sta->fetchAll();
            
            return $resultado;
            
        }catch(PDOException $e){
            echo "ERROR en getDocente(".$sql.")";
        }
    }
    static function getPerfil($idDocente){
        try{
            $mdb =  DataBase::getDb();
            $sql = "SELECT idDocente, nombre, apellido, telefono, email, d.categoria ,d.descripcion, c.descripcion AS categoria
                    FROM Docente d
                    LEFT JOIN categoria c ON d.categoria = c.idCategoria
                    WHERE d.idDocente = $idDocente 
                    LIMIT 1";
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $resultado = $sta->fetchAll();
            
            return $resultado;
            
        }catch(PDOException $e){
            echo "ERROR en getDocente(".$sql.")";
        }
    }

}
?>
