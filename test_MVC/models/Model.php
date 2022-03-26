<?php
abstract class Model
{
    private static $_bdd;

    //INSTANCIE LA CONNEXION A LA BDD
    private static function setBdd ()
    {
        self::$_bdd = new PDO ('mysql:host=localhost;dbname=projet_web', 'root', 'mdp');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //RECUPER LA CONNEXION A LA BDD
    protected function getBdd()
    {
        if(self::$_bdd == null)
            self::setBdd();
        return self::$_bdd;
    }

    /*protected function getAll($table, $obj)
    {
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM ' .$table. ' ORDER by id desc;');
        $req->execute();
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
            $var[] = new $obj($data);
        }
        return $var;
        $req->closeCursor();
    }*/
}
?>