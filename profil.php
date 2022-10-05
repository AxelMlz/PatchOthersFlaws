<?php
    session_start();
    if(!$_SESSION['auth']){
        header('Location: index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
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
            <form>
                    <h1 class="title" >Mon profil</h1>
                    <div class="form-name-container">
                        <div class="name-container">
                            <p>Nom</p>
                            <input type="text" value="<?= isset($_SESSION['auth']->{'Last Name'})?$_SESSION['auth']->{'Last Name'} : ''  ?>" >
                        </div>
                        <div class="name-container">
                            <p>Prénom</p>
                            <input type="text" value="<?= isset($_SESSION['auth']->{'Name'})?$_SESSION['auth']->{'Name'} : '' ?>" >
                        </div>
                    </div>
                    <p>Adresse Email</p>
                    <input type="email" value="<?= isset($_SESSION['auth']->{'Email'})?$_SESSION['auth']->{'Email'} : ''?>" >
                    <div class="form-name-container">
                        <div class="name-container">
                            <p>Mot de passe</p>
                            <input type="password" value="<?= isset($_SESSION['auth']->{'Password'})?$_SESSION['auth']->{'Password'} : '' ?>" >
                        </div>
                        <div class="name-container">
                            <p>Confirmez le mot de passe</p>
                            <input type="password" value="<?= isset($_SESSION['auth']->{'Password'})?$_SESSION['auth']->{'Password'} : '' ?>" >
                        </div>
                    </div>

                    <div class="form-name-container">
                        <div class="name-container">
                            <p>Ville</p>
                            <input type="text" value="<?= isset($_SESSION['auth']->{'City'})?$_SESSION['auth']->{'City'} : '' ?>" >
                        </div>
                        <div class="name-container">
                            <p>Adresse</p>
                            <input type="text" value="<?=isset($_SESSION['auth']->{'Address'})?$_SESSION['auth']->{'Address'} : '' ?>" >
                        </div>
                    </div>
                    <div class="name-container">
                        <p>Code Postal</p>
                        <input type="text" value="<?= isset($_SESSION['auth']->{'Zipcode'})?$_SESSION['auth']->{'Zipcode'} : '' ?>" >
                    </div>
                    <input type="submit" value="Modifier" class="confirm-btn">
                    </div>
            </form>
        <div class="footer">
            © PatchOtherFlaws
        </div>
    </div>
    </div>
</body>
</html>