<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Prihlásiť sa - AnubisSVK</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="https://anubissvk.online/assets/css/login.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="login">
            <h1>Prihlásiť sa</h1>
            <form action="authenticate.php" method="post">
                <label for="username">
                    <i class="fas fa-user"></i>
                </label>
                <input type="text" name="username" placeholder="Používateľské meno" id="username" required>
                <label for="password">
                    <i class="fas fa-lock"></i>
                </label>
                <input type="password" name="password" placeholder="Heslo" id="password" required>
                <input type="submit" value="Prihlásiť sa">
            </form>
        </div>
    </body>
</html>