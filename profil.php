<?php

$curl = curl_init();
$headers = array(
    'Content-type: application/json',
    'Authorization: Bearer keyUwng0eO6raOg5c',
);

curl_setopt($curl, CURLOPT_URL, 'https://api.airtable.com/v0/appmlNChYw519PUa6/Profiles');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');

$resultat = curl_exec($curl);
curl_close($curl);
$resultat = json_decode($resultat);


$posts = null;
function getPost($posts_id){
    $curl = curl_init();
    $headers = array(
        'Content-type: application/json',
        'Authorization: Bearer keyUwng0eO6raOg5c',
    );
    if($posts_id){
        curl_setopt($curl, CURLOPT_URL, 'https://api.airtable.com/v0/appmlNChYw519PUa6/tblIt7XTXmOWrmZ4I?filterByFormula=%28%7BName+%28from+Profiles%29%7D+%3D+%27'.urlencode($posts_id).'%27%29&sort%5B0%5D%5Bfield%5D=Date&sort%5B0%5D%5Bdirection%5D=desc');
    }else{
        curl_setopt($curl, CURLOPT_URL, 'https://api.airtable.com/v0/appmlNChYw519PUa6/tblIt7XTXmOWrmZ4I?sort%5B0%5D%5Bfield%5D=Date&sort%5B0%5D%5Bdirection%5D=desc');
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);  
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');

    $result = curl_exec($curl);

    curl_close($curl);
    $result = json_decode($result);
    $posts = $result->{'records'};
    showPost($posts);
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
    <script src="./profil.js"></script>
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
                            <input type="text" value="Rochard" >
                        </div>
                        <div class="name-container">
                            <p>Prénom</p>
                            <input type="text" value="Pierre" >
                        </div>
                    </div>
                    <p>Adresse Email</p>
                    <input type="email" value="pierre.lerocher@gmail.com">
                    <div class="form-name-container">
                        <div class="name-container">
                            <p>Mot de passe</p>
                            <input type="text" >
                        </div>
                        <div class="name-container">
                            <p>Confirmez le mot de passe</p>
                            <input type="text" >
                        </div>
                    </div>

                    <div class="form-name-container">
                        <div class="name-container">
                            <p>Ville</p>
                            <input type="text" value="Paris" >
                        </div>
                        <div class="name-container">
                            <p>Adresse</p>
                            <input type="text" value="4 résidence des rochers" >
                        </div>
                    </div>
                    <input type="submit" onclick=patchProfil() value="Modifier" class="confirm-btn">
                    </div>
            </form>
        <div class="footer">
            © PatchOtherFlaws
        </div>
    </div>
    </div>
</body>
</html>