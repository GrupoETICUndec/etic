<?php
class DataBase{
    public static function getDb() {
        $host = "localhost";
        $db = "etic";
        $user = "etic";
        $passwd = "etic";
        return new PDO("mysql:host=$host;dbname=$db", $user, $passwd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\''));
    }
}
?>
 
