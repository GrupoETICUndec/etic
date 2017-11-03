<?php require_once 'config/DataBase.php';

class Asignatura{
    private $idAsignatura;
    private $name;
    private $idCarrera;
    
    function __construct($idSesion, $idUsuario = "", $idTurno = "", $estado = "", $ultimaSesion = ""){
        $this->setIdSesion($idSesion);
        $this->setIdUsuario($idUsuario);
        $this->setIdTurno($idTurno);
        $this->setEstado($estado);
        $this->setUltimaSesion($ultimaSesion);
    }


    function getIdAsignatura() {
        return $this->idAsignatura;
    }

    function getName() {
        return $this->name;
    }

    function getIdCarrera() {
        return $this->idCarrera;
    }

    function setIdDocente($idDocente) {
        $this->idDocente = $idDocente;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setIdAsignatura($idAsignatura) {
        $this->idAsignatura = $idAsignatura;
    }

    static function getAsignatura($idAsignatura){
        try{
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM asignaturas WHERE asignaturaId = $idAsignatura LIMIT 1";
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $resultado = $sta->fetchAll();
            
            return $resultado;
            
        }catch(PDOException $e){
            echo "ERROR";
        }
    }
    
    public static function saveEstado($estado, $id){
        try{
            $mdb = DataBase::getDb();
            $sql = "UPDATE Usuario SET movimiento = $estado WHERE usuarioId = $id";
            $temp = $mdb->prepare($sql);
            $temp->execute();
        } catch (PDOException $e){
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}
?>
