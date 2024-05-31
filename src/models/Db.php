<?php

class Db {
 
    private static $instance;

    protected static function getInstance(){
        if(self::$instance === null){
            try{
                // Connexion à la base de données MySQL
                self::$instance = new PDO("mysql:host=localhost;dbname=social_network", "root", "");
                // Configuration de PDO pour afficher les erreurs
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              
            } catch(PDOException $e){
                // En cas d'erreur, afficher le message d'erreur et arrêter le script
                die($e->getMessage());
            }
        }

        // Retourner l'instance de connexion
        return self::$instance;
    }
   
    protected static function disconnect(){
        // Fermer la connexion en affectant null à l'instance
        self::$instance = null;
    }
}


?>
