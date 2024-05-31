<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header></header>

    <form method="post">
        <button type="submit" name="disconnect">Déconnexion</button>
    </form>

    <h1>Welcome to Brenden Social Network</h1>

    <?php foreach ($posts as $post) {
        echo "<h2>" . $post["title"] . "</h2>";
        echo "<p>" . $post["content"] . "</p>";
        
        if ($post['author_id'] === $_SESSION["user"]) {
            
    ?>
            <form method="post">
                <button type="submit" name="edit">Modifier</button>
                <button type="submit" name="delete">Supprimer</button>
            </form>
    <?php
        }
    }
    ?>
</body>

</html>
