<?php
class Autorisation
{
    private $id;
    private $nom;
    private $code;
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
        $query = "SELECT * FROM t_autorisations WHERE id_aut=:id_aut";

        $args = array();
        $args['id_aut'] = $this->getId();

        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($args);
            $tab = $stmt->fetch();

            $this->setNom($tab['nom_aut']);
            $this->setCode($tab['code_aut']);
            $this->setDescription($tab['desc_aut']);
            return true;
        } catch (Exception $e){
            return false;
        }
    }

    public function add($tab){
        $args['nom_aut'] = $tab['nom_aut'];
        $args['code_aut'] = $tab['code_aut'];
        $args['desc_aut'] = $tab['desc_aut'];

        $query = "INSERT INTO t_autorisations SET "
            . "nom_aut = :nom_aut, "
            . "code_aut = :code_aut, "
            . "desc_aut = :desc_aut";

        try{
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($args);
            return $this->pdo->lastInsertId();
        }catch (Exception $e){
            return false;
        }
    }

    /**
     * Renvoie vrai si le code existe déjà dans la base
     * @param $code
     * @return bool
     */
    public function checkCode($code){
        $query = "SELECT * FROM t_autorisations WHERE code_aut = :code LIMIT 1";
        try{
            $stmt = $this->pdo->prepare($query);
            $args = array();
            $args['code'] = $code;
            $stmt->execute($args);
            $tab = $stmt->fetch();
            if(isset($tab)){
                if($tab['code_aut'] == $code){
                    return true;
                } else{
                    return false;
                }
            }
        }catch (Exception $e){
            return false;
        }
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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
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

    /**
     * @return mixed
     */
    public function getPdo()
    {
        return $this->pdo;
    }

    /**
     * @param mixed $pdo
     */
    public function setPdo($pdo)
    {
        $this->pdo = $pdo;
    }
}
?>