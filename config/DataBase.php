<?php
class DataBase{
    public static function getDb() {
        $host = "localhost";
        $db = "etic";
        $user = "etic";
        $passwd = "etic";
        return new PDO("mysql:host=$host;dbname=$db", $user, $passwd);
    }
}
?>
 
