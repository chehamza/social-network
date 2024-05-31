<?php
require_once("../src/models/Db.php");
require_once("../src/models/repositories/UserRepository.php");
require_once("../src/models/User.php");
require_once("../src/models/repositories/postRepository.php");
require_once("../src/models/Post.php");
require_once("../src/controllers/Controller.php");
require_once("../src/controllers/mainController.php");
require_once("../src/controllers/loginController.php");
require_once("../src/controllers/RegisterController.php");
require_once("../core/Router.php");



try{
    //Je crée un objet de mon routeur
   $router = new Router();
   //J'appelle la fonction qui gère les routes (donc qui renvoie l'utilisateur vers le bon controller)
   $router->start();
}
catch(PDOException $e){
    die($e->getMessage());
}
 
