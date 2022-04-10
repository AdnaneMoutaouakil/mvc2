<?php


namespace Model;
use \PDO;
use PDOException;

Class personneModel{

    static function Connexion(){
        try
        {
            $db = new PDO('mysql:host=localhost;dbname=simo', 'root', '');
            return $db;
           
        }
        catch(PDOException $e)
        {
            die('Erreur : '.$e->getMessage());
        }
    }

    public function getUsers($ar)
    {
       $db =self::Connexion();
       $req = $db->prepare('SELECT * from User');
       $req->execute();
       $post = $req->fetchAll();
       return $post;
   }

   function getUser($ar)
   {
       $db =self::Connexion();
       $user = $db->prepare('SELECT * from User where id = :id');
       $user->execute([':id'=>$ar['id']]);
       $personnes=$user->fetch();
       return $personnes;
   }

   function getUserByName($ar)
   {
       $db =self::Connexion();
       $user = $db->prepare('SELECT * from User where nom = :nom and prenom = :prenom');
       $user->execute([':nom'=>$ar['nom'],'prenom'=>$ar['prenom']]);
       $personnes=$user->fetch();
       return $personnes;
   }

}