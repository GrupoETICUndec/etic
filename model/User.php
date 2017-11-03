<?php 
require_once 'config/DataBase.php';

class User{
    private $id;
    private $name;
    private $user;
    private $passwd;
    function __construct($id = null, $name = "", $user = "", $passwd = ""){
        $this->setId($id);
        $this->setName($name);
        $this->setUser($user);
        $this->setPasswd($passwd);
    }

    function getId() { return $this->id; }
    function setId($id) { $this->id = $id; }

    function getName() { return $this->name; }
    function setName($val) { $this->name = $val; }

    function getUser() { return $this->user; }
    function setUser($val) { $this->user = $val; }

    function getPasswd() { return $this->passwd; }
    function setPasswd($val) { $this->passwd = $val; }

    static function get($user, $passwd){
        try{
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM User WHERE user = '$user' AND passwd = '$passwd' LIMIT 1";
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $res = $sta->fetchAll();
            $data = new User ($res[0]['idUser'], $res[0]['name'], $res[0]['user'], $res[0]['passwd']);
        }catch(PDOException $e){
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }

    
    static function getAll(){
        try{
            $mdb =  DataBase::getDb();
            $sql = "SELECT * FROM User";
            $sta = $mdb->prepare($sql);
            $sta->execute();
            $res = $sta->fetchAll();
            foreach($res as $item)
                $data[] = new User ($item['idUser'], $item['name'], $item['user'], $item['passwd']);
        }catch(PDOException $e){
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        return $data;
    }

    public function save(){
        try {
            $mdb =  DataBase::getDb();
            if($this->getId() != null){
                $sql = "UPDATE user SET name = '".$this->getName()."', user = '".$this->getUser()."', passwd = '".$this->getPasswd()."' WHERE idUser = ".$this->getId();
            }else{
                $sql = "INSERT user(name, user, passwd) VALUES ('".$this->getName()."', '".$this->getUser()."', '".$this->getPasswd()."')";
            }
            $tmp = $mdb->prepare($sql);
            $tmp->execute();
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public static function delete($id){
        try {
            $mdb =  DataBase::getDb();
            $sql = "DELETE FROM user WHERE idUser = $id";
            $temp = $mdb->prepare($sql);
            $temp->execute();
            $mdb = null;
        } catch (PDOException $e) {
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        } 
    }

}
?>
