<?php
class Bdd extends PDO{

    private $_error = array();

    private const sgbd = 'mysql';
    private const server = "127.0.0.1";
    private const db = "the_great_business";
    private const user = "root";
    private const pw = "";

    //connexion ordi perso
    private const pw2 = "crepuscule";
    private const user2 = "adam";

    public function __construct(){ 
        $user = self::user;
        $pw = self::pw;
        $connectionString = self::sgbd.":dbname=".self::db.";host=".self::server;
        if($_SERVER['DOCUMENT_ROOT'] == "/var/www/html"){
            $user = self::user2;
            $pw = self::pw2;
        }
        parent::__construct($connectionString, $user, $pw);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
public function prepare(string $sql, array $opt = []): PDOStatement|false {
    return parent::prepare($sql, $opt);
}
public function returErrorDatabase(){
    $error = $this->_error;
    return (empty($this->_error[1]))?false:"Mysql renvoie une erreur : ".$error[2]."<br/>Mysql code : ".$error[1]."<br/>PDO code : ".$error[2];
}

}
$Bdd = new Bdd();