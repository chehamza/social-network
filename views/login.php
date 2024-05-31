<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <div>
            <label for="email">Username:</label>
            <input type="text" id="email" name="email" placeholder="enter your email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required placeholder="enter your password">
        </div>
        <div>
            <button type="submit" name="submit">Login</button>
            <button> <a href="http://localhost:8000/register">Register</a></button>
        </div>
    </form>
</body>
</html>
