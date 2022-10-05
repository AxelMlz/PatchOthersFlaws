<?php

if(isset($_POST['email']) && isset($_POST['password'])){

    $curl = curl_init();
    $headers = array(
    'Content-type: application/json',
    'Authorization: Bearer keyUwng0eO6raOg5c',
    );
    
    $url = 'https://api.airtable.com/v0/appmlNChYw519PUa6/Profiles?filterByFormula=%28%7BEmail%7D%20%3D%20%22'.urlencode($_POST['email']).'%22%29';
    
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        
    $resultat = curl_exec($curl);
    curl_close($curl);
    $resultat = json_decode($resultat);

    if($resultat->{'records'}[0]->{'fields'}->{'Password'} == $_POST['password']){
        session_start();
        $_SESSION['auth'] = $resultat->{'records'}[0]->{'fields'};
        header('Location: profil.php');
    }
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
            <div class="register">
                
                <form method="post" action="connexion.php">
                    <h1 class="title" >Me Connecter</h1>
                    <div class="form-name-container">
                        <div class="name-container">
                            <p>Email</p>
                            <input type="text" name="email" >
                        </div>
                    </div>
                    <div class="form-name-container">
                        <div class="name-container">
                            <p>Mot de passe</p>
                            <input type="text" name="password">
                        </div>
                    </div>
                    <button class="confirm-btn">Connexion</button>
                    </div>
                </form>
        <div class="footer">
            © PatchOtherFlaws
        </div>
    </div>
    </div>
</body>
</html>