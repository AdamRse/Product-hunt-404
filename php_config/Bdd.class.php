<?php




class Bdd extends PDO{

    private $_error = false;

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
    return (empty($this->_error[0]))?$this->_error:"Mysql renvoie une erreur : ".$error[2]."<br/>Mysql code : ".$error[1]."<br/>PDO code : ".$error[2];
}
private function noTags($string){
    return preg_replace("/<(^>)+>/", "", $string);
}
private function checkError(PDOStatement $pdoS){
    if(!empty($pdoS->errorInfo()[0])){
        $this->_error = $pdoS->errorInfo();
    }
}

///////////////////////////////////// ACCES BDD

//USER
public function getUserId($id){
    $q = $this->prepare("SELECT * FROM users WHERE id = ?");
    $q->execute([$id]); $this->checkError($q);
    return $q->fetch(PDO::FETCH_ASSOC);
}
public function getUserName($name){
    $q = $this->prepare("SELECT * FROM users WHERE nom = ?");
    $q->execute([$name]); $this->checkError($q);
    return $q->fetch(PDO::FETCH_ASSOC);
}
public function addUser($tableauForm){// On attend les index "nom", "pass", "mail"
    $tableauForm['pass']=password_hash($tableauForm['pass'], PASSWORD_BCRYPT);
    $tableauForm['nom']=$this->noTags($tableauForm['nom']);
    $q = $this->prepare("INSERT INTO users(nom, pass, mail) VALUES (:nom, :pass, :mail)");
    $q->execute($tableauForm); $this->checkError($q);
    return $q->fetch(PDO::FETCH_ASSOC);
}
public function connectUser($username, $password){
    $rt = false;
    $q = $this->prepare("SELECT * FROM users WHERE nom = ?");
    if($q->execute([$username])){
        if($user=$q->fetch(PDO::FETCH_ASSOC)){
            if(password_verify($password, $user['pass'])){
                $rt = $user;
            }
            else
                $this->_error = "Mot de passe erroné";
        }
        else
            $this->_error = "L'utilisateur $username n'est pâs en BDD.";
    }
    else
        $this->checkError($q);
    return $rt;
}

//CATEGORIES
public function getCategories($limit = 10){
    $q = $this->query("SELECT * FROM categories LIMIT 0, $limit");
    $this->checkError($q);
    return $q->fetchAll(PDO::FETCH_ASSOC);
}
public function addCategorie($categorie){
    $q = $this->prepare("INSERT INTO categories(tag) VALUES (?)");
    $q->execute([$categorie]); $this->checkError($q);
    return $q->fetch(PDO::FETCH_ASSOC);
}

}
$Bdd = new Bdd();