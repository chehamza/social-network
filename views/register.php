<!DOCTYPE html>
<html lang="fr">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="/assets/css/style.css"  rel="stylesheet" >
    <title>Inscription</title>
    
</head>

<body>
    <main>

        <h2>Inscription</h2>
        <form action="" method="POST">
            <div>
                <label for="name">Nom:</label>
                <input type="text" id="name" name="name" placeholder="enter your name">
            </div>
            <div>
                <label for="firstName">Prénom:</label>
                <input type="text" id="firstName" name="firstName" placeholder="enter your firstName" required>
            </div>  

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="enter your email"required>
            </div>
            <div>
                <label for="password">Mot de passe:</label>
                <input type="password" id="password" name="password" placeholder="enter your password" required>
            </div>

            <button type="submit" name="submit">Valider</button>
            <button> <a href="http://localhost:8000/login">login</button>
        </form>
    </main>

</body>

</html>