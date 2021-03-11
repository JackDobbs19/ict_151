<?php
class Personne
{
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $password;
    private $news_letter;
    private $pdo;

    public function __construct($id = null){
        $this->pdo = new PDO('mysql:dbname='. BASE_NAME .';
                            host='.SQL_HOST,
                            SQL_USER,
                            SQL_PASSWORD,
                            array(  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                            )
        );

        if($id){
            $this->setId($id);
            $this->init();
        }
    }

    public function init(){
        $query = "SELECT * FROM t_personnes WHERE id_per=:id_per";

        $args = array();
        $args['id_per'] = $this->getId();

        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($args);
            $tab = $stmt->fetch();

            $this->setNom($tab['nom_per']);
            $this->setPrenom($tab['prenom_per']);
            $this->setEmail($tab['email_per']);
            $this->setPassword($tab['password_per']);
            $this->setNewsLetter($tab['news_letter_per']);
            return true;
        } catch (Exception $e){
            return false;
        }
    }

    public function add($tab){

        $this->genPassword($tab['password']);

        //Tableau d'arguments
        $args['nom_per'] = $tab['nom_per'];
        $args['prenom_per'] = $tab['prenom_per'];
        $args['email_per'] = $tab['email_per'];
        $args['password_per'] = $this->getPassword();
        $args['news_letter_per'] = $tab['news_letter'];

        $query = "INSERT INTO t_personnes SET "
                . "nom_per = :nom_per, "
                . "prenom_per = :prenom_per, "
                . "password_per = :password_per, "
                . "email_per = :email_per, "
                . "news_letter_per = :news_letter_per";
        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($args);
            return $this->pdo->lastInsertId();
        } catch (Exception $e){
            return false;
        }

    }

    public function checkEmail($email){
        $query = "SELECT * FROM t_personnes WHERE email_per = :email LIMIT 1";
        try {
            $stmt = $this->pdo->prepare($query);
            $args = array();
            $args[':email'] = $email;
            $stmt->execute($args);
            $tab = $stmt->fetch();
            if(isset($tab)) {
                if ($tab['email_per'] == $email) {
                    return true;
                } else {
                    return false;
                }
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function checkLogin($email, $password){
        $query = "SELECT id_per, password_per FROM t_personnes WHERE email_per=:email LIMIT 1";
        try {
            $stmt = $this->pdo->prepare($query);
            $args = array();
            $args[':email'] = $email;
            $stmt->execute($args);
            $tab = $stmt->fetch();

            if(password_verify($password, $tab['password_per'])){
                $_SESSION['id'] = $tab['id_per'];
                $user_browser_ip = $_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'];
                $_SESSION['login_string'] = password_hash($tab['password_per'].$user_browser_ip, PASSWORD_DEFAULT);
                $_SESSION['email'] = $email;
            }else{
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function checkConnect(){
        if(isset($_SESSION['id'], $_SESSION['email'], $_SESSION['login_string'])){
            $user_browser_ip = $_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR'];
            if(password_verify($this->getPassword().$user_browser_ip, $_SESSION['login_string'])){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function genPassword($password){
        $this->setPassword(password_hash($password, PASSWORD_DEFAULT));
    }

    public function __toString(){
        $str = "<pre>";
        $str .= "\nNom = " . $this->getNom();
        $str .= "\nPrénom = " . $this->getPrenom();
        $str .= "\nEmail = " . $this->getEmail();
        $str .= "\nPassword = " . $this->getPassword();
        $str .= "\nNews_letter = " . $this->getNewsLetter();
        $str .= "</pre>";
        return $str;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getNewsLetter()
    {
        return $this->news_letter;
    }

    /**
     * @param mixed $news_letter
     */
    public function setNewsLetter($news_letter)
    {
        $this->news_letter = $news_letter;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}