<?php

class Router {
    public function start() {
        
        $url = $_SERVER['REQUEST_URI'];
        // Supprimer les éventuels paramètres de requête de l'URL
       

        $url = strtok($url, '?');

        if ($url === '/') {
            $accueil = new MainController();
            $accueil->index();
        }else{
            $urlSegments = explode("/", $url);

            // Vérifier si l'URL comporte suffisamment de segments pour déterminer le contrôleur
            if (isset($urlSegments[1]) && !empty($urlSegments[1])) {
                $controller = ucfirst($urlSegments[1]) . "Controller";
    
                if (class_exists($controller)) {
                    $page = new $controller;
    
                    // Vérifier si la méthode index existe dans le contrôleur
                    if (method_exists($page, "index")) {
                        $page->index();
                    } else {
                        throw new Exception("index method not found in $controller");
                    }
                } else {
                    echo "404 Not Found: Controller '$controller' not found";
                }
            } else {
                // Si aucun contrôleur n'est spécifié dans l'URL
                echo "404 Not Found: Controller not specified in URL";
            }

        }

        
    }
}


