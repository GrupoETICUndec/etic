<?php require_once 'config/DataBase.php';

class Categoria {
    private $idCategoria;
    private $descripcion;
    
    function __construct($id, $descripcion){
        $this->idCategoria = $id;
        $this->descripcion = $descripcion;
    }
    
    function getIdCategoria() { return $this->idCategoria; }
    function setIdCategoria($value) { $this->idCategoria = $value ; }

    function getDescripcion() { return $this->descripcion; }
    function setDescripcion($value) { $this->descripcion = $value ; }

    static function getCategoria($id){
        try{
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM categoria WHERE idCategoria = $id LIMIT 1";
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $r = $sta->fetchAll();
            
            $ob = new Categoria($r[0]['idCategoria'], 
                                $r[0]['descripcion']  );
            
            return $ob;
            
        }catch(PDOException $e){
            echo "ERROR en getDocente(".$sql.")";
        }
    }

}

?>
