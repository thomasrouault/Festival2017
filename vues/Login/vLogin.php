<html>
    <head>
        <meta charset="utf-8" />
        <link href="css/cssLogin.css" rel="stylesheet" type="text/css">
        <title>Formulaire d'identification</title>
    </head>
    <body>
        <h1>Festival</h1>
        <img id="imgConnexion" src="images/ImgFestival.jpg" alt="Festival" />
        <form id="blocLogin" action="cLogin.php" method="post">
            <input type="text" name="login" class="sign-up-input" placeholder="Nom d'utilisateur"><br />
            <input type="password" name="pwd" class="sign-up-input" placeholder="Mot de passe"><br />
            <input type="submit" value="Connexion" class="sign-up-button">
            <input type="reset" value="Annuler" class="sign-up-button">
        </form>
        
    </body>
</html>