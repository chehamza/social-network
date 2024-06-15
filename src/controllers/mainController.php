<?php

class MainController extends Controller {

    public function index() {
        // Vérifie si des données ont été soumises via POST
        if(isset($_POST["disconnect"])) {
            // Détruit la session existante
            session_destroy();
            
            $this->redirect("/login");
        }

        // Récupère les messages
        $posts = Post::getPosts();

        // Inclut la vue
        require("../views/homePage.php");
    }
}

?>
