<?php
abstract class Model
{
    private static $_bdd;

    //INSTANCIE LA CONNEXION A LA BDD
    private static function setBdd ()
    {
        self::$_bdd = new PDO ('mysql:host=localhost;dbname=projet_web2', 'root', 'root');
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //RECUPER LA CONNEXION A LA BDD
    protected function GetBdd()
    {
        if(self::$_bdd == null)
            self::setBdd();
        return self::$_bdd;
    }
}
?>