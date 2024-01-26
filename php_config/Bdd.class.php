<?php
class Bdd extends PDO{

    private $_lastRequest = false;
    private $_error = false;
    private $_sqlUserAll = "SELECT u.*, p.nom AS nom_projet_like, COUNT(l.projets_id) AS nbLike, pc.nom AS nom_projet_commente, c.comment AS commentaire
                            FROM  users u LEFT JOIN likes l ON u.id = l.users_id LEFT JOIN projets p ON l.projets_id = p.id LEFT JOIN commentaires c ON u.id = c.users_id LEFT JOIN projets pc ON c.projets_id = pc.id
                            WHERE u.nom = ? GROUP BY u.id, nom_projet_like, nom_projet_commente";

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
    $this->_lastRequest = $sql;
    return parent::prepare($sql, $opt);
}
public function returErrorDatabase(){
    $error = $this->_error;
    return (empty($this->_error[0]))?$this->_error:"Mysql renvoie une erreur : ".$error[2]."<br/>Mysql code : ".$error[1]."<br/>PDO code : ".$error[2];
}
private function noTags($elem){
    $rt = false;
    if(is_string($elem))
        $rt = preg_replace("/<(^>)+>/", "", $elem);
    elseif(is_array($elem)){
        foreach ($elem as $k => $str) {
            $elem[$k]=preg_replace("/<(^>)+>/", "", $str);
        }
        $rt = $elem;
    }
    return $rt;
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
public function getUserName($name, $all = false){
    $q = $this->prepare($all ? $this->_sqlUserAll : "SELECT * FROM users WHERE nom = ?");
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
    $q = $this->prepare($this->_sqlUserAll);
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

//PROJET
public function addProjet($tableauForm, $categories = array()){//$tableauForm : "nom", "intro", "detail", "lien" (lien peut être vide) ; $categories peut être vide, si plein attend juste le nom de la catégorie. Si plusieurs catégoriels, on les attend sous forme de tableau ["categorie1", "categorie2", ...]
    $rt = false;
    if(!empty($_SESSION['user']['id'])){
        $tableauForm=$this->noTags($tableauForm);
        $tableauForm['users_id']=$_SESSION['user']['id'];
        if(is_string($categories)) $categories = array($categories);
        $q = $this->prepare("INSERT INTO projets(users_id, nom, intro, detail, lien) VALUES (:users_id, :nom, :intro, :detail, :lien)");
        if($q->execute($tableauForm))
            $rt = true;
        else
            $this->checkError($q);
        if($rt){
            $rt = $this->addProjetCategories($this->lastInsertId(), $categories);
        }
    }
    else
        $this->_error = "L'utilisateur doit être connecté pour ajouter un projet";
    return $rt;
}
public function addProjetCategories($idProjet, $tabCategories){
    $rt = false;
    $sqlINSERT="INSERT IGNORE INTO categories (tag) VALUES ";
    $sqlSELECT="SELECT id FROM categories WHERE tag IN(";
    foreach ($tabCategories as $tag) {
        $sqlINSERT.= "(?), ";
        $sqlSELECT.="?,";
    }
    $sqlSELECT=substr($sqlSELECT,0,-1).")";
    $sqlINSERT=substr($sqlINSERT,0,-2);
    $q = $this->prepare($sqlINSERT);
    $rt = $q->execute($tabCategories);
    if($rt){
        $q2 = $this->prepare($sqlSELECT);
        if($q2->execute($tabCategories)){
            $rt = true;
            while($tabIdTag = $q2->fetch(PDO::FETCH_NUM)){
                if(!$this->query("INSERT INTO projet_categories (id_projet, id_categories) VALUES ($idProjet, ".$tabIdTag[0].")")){
                    $rt=false;
                    $this->_error = "Impossible d'ajouter le projet $idProjet à la catégorie ".$tabIdTag[0];
                }
            }
        }
        else
            $this->checkError($q2);
    }
    else
        $this->checkError($q);
    return $rt;
}
public function getProjets(){
    $q = $this->query("SELECT projets.*,users.nom as createur, users.avatar FROM projets INNER JOIN users ON projets.users_id = users.id;");
    return $q->fetchAll(PDO::FETCH_ASSOC);
}
public function getProjet($id){
    $q = $this->prepare("SELECT p.*,u.nom as createur, u.avatar FROM projets p INNER JOIN users u ON p.users_id = u.id WHERE p.id = ?");
    $q->execute(array($id)); $this->checkError($q);
    $projetUser = $q->fetch(PDO::FETCH_ASSOC);
    $projetUser['commentaires']  = $this->getCommentairesProjet($id);
    $projetUser['categories']  = $this->getCategoriesProjet($id);
    return $projetUser;
}
//CATEGORIES
public function getCategories($limit = 10){
    $q = $this->query("SELECT * FROM categories LIMIT 0, $limit");
    $this->checkError($q); $this->checkError($q);
    return $q->fetchAll(PDO::FETCH_ASSOC);
}
public function getCategoriesProjet($idProjet){
    $q = $this->prepare("SELECT c.tag FROM projet_categories pc LEFT JOIN categories c ON pc.id_categories = c.id WHERE id_projet = ?");
    $q->execute([$idProjet]); $this->checkError($q);
    return $q->fetchAll(PDO::FETCH_ASSOC);
}
public function addCategorie($categorie){
    $q = $this->prepare("INSERT INTO categories(tag) VALUES (?)");
    $q->execute([$categorie]); $this->checkError($q);
    return $q->fetch(PDO::FETCH_ASSOC);
}
//COMMENTAIRES
public function getCommentairesUser($user, $getUser = true){
    $sql = ($getUser) ? "SELECT c.* u.nom, u.avatar FROM commentaires c LEFT JOIN users u ON c.users_id = u.id WHERE user_id = ?" : "SELECT * FROM commentaires WHERE user_id = ?";
    $q = $this->prepare($sql);
    $q->execute([$user]); $this->checkError($q);
    return $q->fetch(PDO::FETCH_ASSOC);
}
public function getCommentairesProjet($projet, $getUser = true){
    $sql = ($getUser) ? "SELECT c.*, u.nom, u.avatar FROM commentaires c LEFT JOIN users u ON c.users_id = u.id WHERE c.projets_id = ?" : "SELECT * FROM commentaires WHERE projets_id = ?";
    $q = $this->prepare($sql);
    $q->execute([$projet]); $this->checkError($q);
    return $q->fetchAll(PDO::FETCH_ASSOC);
}
public function addCommentaire($tabCommentaire){//On attend "comment" (le commentaire), "projet" (l'id du projet commenté), "user" (l'id de l'user qui commente)
    $q = $this->prepare("INSERT INTO commentaires (comment, projets_id, users_id) VALUES(:comment, :projet, :user)");
    $rt = $q->execute($tabCommentaire); $this->checkError($q);
    return $rt;
}
//LIKES
public function addLike($idUser, $idProjet){
    $q = $this->prepare("UPDATE projets SET likes = likes+1 WHERE id = ?");
    $q2 = $this->prepare("INSERT INTO likes (projets_id, users_id) VALUES (:p, :u)");
    $rt = $q->execute([$idProjet]) && $q2->execute([$idUser, $idProjet]);
    $this->checkError($q); $this->checkError($q2);
    return $rt;
}
public function getLikesUser($id){
    $q = $this->prepare("SELECT l.tq, COUNT(l.id) as nbLikes, p.nom as projectNom, p.id as projectId
    FROM likes l LEFT JOIN users u ON l.users_id = u.id LEFT JOIN projets p ON l.projets_id = p.id WHERE l.users_id = ?");
    $rt=$q->execute([$id]); $this->checkError($q);
    return $rt;
}
}
$Bdd = new Bdd();