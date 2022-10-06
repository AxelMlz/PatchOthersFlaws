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
    <script src="./profil.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="app">
        <div class="nav">
            <a href="index.php">Patch-Others-Flaws</a>

            <div class="nav-right">
                <?php require('./nav-btn.php') ?>
            </div>
            </div>
        <div class="content">
            <div class='forms'>
                    <h1 class="title" >Mon profil</h1>
                    <div class="form-name-container">
                        <div class="name-container">
                            <p>Nom</p>
                            <input type="text" id= "nom" value="<?= isset($_SESSION['auth']->{'fields'}->{'Last Name'})?$_SESSION['auth']->{'fields'}->{'Last Name'} : ''  ?>" >
                        </div>
                        <div class="name-container">
                            <p>Prénom</p>
                            <input type="text" id="prenom" value="<?= isset($_SESSION['auth']->{'fields'}->{'Name'})?$_SESSION['auth']->{'fields'}->{'Name'} : '' ?>" >
                        </div>
                    </div>
                    <p>Adresse Email</p>
                    <input type="email" id="email" value="<?= isset($_SESSION['auth']->{'fields'}->{'Email'})?$_SESSION['auth']->{'fields'}->{'Email'} : ''?>" >
                    <div class="form-name-container">
                        <div class="name-container">
                            <p>Mot de passe</p>
                            <input type="password" id=password value="<?= isset($_SESSION['auth']->{'fields'}->{'Password'})?$_SESSION['auth']->{'fields'}->{'Password'} : '' ?>" >
                        </div>
                        <div class="name-container">
                            <p>Confirmez le mot de passe</p>
                            <input type="password" id="confirmePassword" value="">
                        </div>
                    </div>

                    <div class="form-name-container">
                        <div class="name-container">
                            <p>Ville</p>
                            <input type="text" id='ville' value="<?= isset($_SESSION['auth']->{'fields'}->{'City'})?$_SESSION['auth']->{'fields'}->{'City'} : '' ?>" >
                        </div>
                        <div class="name-container">
                            <p>Adresse</p>
                            <input type="text" id='adresse' value="<?= isset($_SESSION['auth']->{'fields'}->{'Address'})?$_SESSION['auth']->{'fields'}->{'Address'} : '' ?>" >
                        </div>
                    </div>
                    <div class="name-container">
                        <p>Code Postal</p>
                        <input type="text"  value="<?= isset($_SESSION['auth']->{'fields'}->{'Zipcode'})?$_SESSION['auth']->{'fields'}->{'Zipcode'} : '' ?>" >
                    </div>
                    <button class="confirm-btn" onclick='patchProfil(`<?= $_SESSION["auth"]->{"id"} ?>`)'>Modifier</button>
                    </div>
    </div>
        <div class="footer">
            © PatchOtherFlaws
        </div>
    </div>
    </div>
</body>
</html>
