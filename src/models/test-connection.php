<?php
// Inclure la classe Db
require_once 'Db.php';

class dataBase extends Db {
    public function checkConnection() {
        // Obtenir une instance de connexion à la base de données en utilisant la méthode héritée
        $db = $this->getInstance();

        // Vérifier si la connexion est réussie
        if ($db instanceof PDO) {
            return "Connexion réussie à la base de données.";
        } else {
            return "Échec de la connexion à la base de données.";
        }
    }
}

// Créer une instance de la classe dataBase
$database = new dataBase();

// Appeler la méthode pour vérifier la connexion
$result = $database->checkConnection();

// Afficher le résultat
echo $result;
?>
<form action="traitement.php" method="POST">
            <label for="titre">Titre :</label>
            <input type="text" id="title" name="title" required>

            <label for="contenu">Contenu :</label>
            <textarea id="contenu" name="content" rows="5" required></textarea>

            <button type="submit" name="create">Publier</button>
        </form>
