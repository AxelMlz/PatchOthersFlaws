<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="./script.js"></script>
</head>
<body>
    <div class="app">
        
        <div class="nav">
        <a href="index.php">Patch-Others-Flaws</a>

            <div class="nav-right">
                <a href="inscription.php">Inscription</a>
                <a href="connexion.php">Connexion</a>
            </div>
        </div>
        <div class="content">
            <div class="register">  
                <div class="form">
                    <h1 class="title" >Inscription</h1>
                    <div class="form-name-container">
                        <div class="name-container">
                            <p>Nom</p>
                            <input type="text" id="nom">
                        </div>
                        <div class="name-container">
                            <p>Prénom</p>
                            <input type="text" id="prenom" >
                        </div>
                    </div>
                    <p>Adresse Email</p>
                    <input type="email" id="email" >
                    <div class="form-name-container">
                        <div class="name-container">
                            <p>Mot de passe</p>
                            <input type="text" id="password" >
                        </div>
                        <div class="name-container">
                            <p>Confirmez le mot de passe</p>
                            <input type="text" id="password2">
                        </div>
                    </div>
                    <button class="confirm-btn" onclick='inscription()'>Inscription</button>
                    </div>
                </div>
        <div class="footer">
            © PatchOtherFlaws
        </div>
    </div>
    </div>
</body>
</html>