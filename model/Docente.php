<?php require_once 'config/DataBase.php';

class Docente{
    private $idDocente;
    private $nombre;
    private $apellido;
    private $telefono;
    private $email;
    private $descripcion;
    
    function __construct($idDocente, $nombre, $apellido, $telefono, $email, $descripcion){
        $this->setIdDocente($idDocente);
        $this->setNombre($nombre);
        $this->setApellido($apellido);
        $this->setTelefono($telefono);
        $this->setDescripcion($descripcion);

    }


    function getIdDocente() {
        return $this->idDocente;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function getCv() {
        return $this->cv;
    }

    function setIdDocente($idDocente) {
        $this->idDocente = $idDocente;
    }

    function setName($nombre) {
        $this->nombre = $nombre;
    }

    function setLastName($apellido) {
        $this->apellido = $apellido;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    static function getDocente($idDocente){
        try{
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM Docente WHERE idDocente = $idDocente LIMIT 1";
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $resultado = $sta->fetchAll();
            
            return $resultado;
            
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
            $sql = "SELECT idDocente, nombre, apellido, telefono, email, d.descripcion, c.descripcion AS categoria
                    FROM Docente d
                    INNER JOIN categoria c
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
