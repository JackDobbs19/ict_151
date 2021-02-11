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

    public function __construct(){
        $this->pdo = new PDO('mysql:dbname='. BASE_NAME .';
                            host='.SQL_HOST,
                            SQL_USER,
                            SQL_PASSWORD,
                            array(  PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                            )
        );
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

}