<?php
class Fonction
{
    private $id;
    private $nom;
    private $abreviation;
    private $description;
    private $pdo;

    public function __construct($id=null){
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
        $query = "SELECT * FROM t_fonctions WHERE id_fnc=:id_fnc";

        $args = array();
        $args['id_fnc'] = $this->getId();

        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($args);
            $tab = $stmt->fetch();

            $this->setNom($tab['nom_fnc']);
            $this->setAbreviation($tab['abr_fnc']);
            $this->setDescription($tab['desc_fnc']);
            return true;
        } catch (Exception $e){
            return false;
        }
    }

    public function add($tab){
        $args['nom_fnc'] = $tab['nom_fnc'];
        $args['abr_fnc'] = $tab['abr_fnc'];
        $args['desc_fnc'] = $tab['desc_fnc'];

        $query = "INSERT INTO t_fonctions SET"
            . "nom_fnc = :nom_fnc, "
            . "abr_fnc = :abr_fnc, "
            . "desc_fnc = :desc_fnc, ";

        try{
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($args);
            return $this->pdo->lastInsertId();
        }catch (Exception $e){
            return false;
        }
    }

    public function checkNom(){
        
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
    public function getAbreviation()
    {
        return $this->abreviation;
    }

    /**
     * @param mixed $abreviation
     */
    public function setAbreviation($abreviation)
    {
        $this->abreviation = $abreviation;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
?>