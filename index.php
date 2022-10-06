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
    $data = $result->{'records'};

    showPost($data);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css%22%3E">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma%22%3E">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <style>
        .w3-bar-block .w3-bar-item {padding:20px}
    </style>
    <title>Document</title>
</head>
<body>
<div class="navbar">
    <div class="nav-left">
        <a href="index.php"><h1 class="w3-center w3-padding-16 title">Patch Others Flaws</h1></a>
        <span>Version admin</span>
    </div>
    <div class="nav-right">
        <?php require('./nav-btn.php') ?>
    </div>
</div>

<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
  </div>
    <div class='content' style='flexbox-display:flex'>
    
        <?php
        for($i = 0; $i < count($resultat->{'records'}); $i++){
            echo '<a style="text-decoration:none" href="index.php?post='. $resultat->{'records'}[$i]->{"fields"}->{"Name"} .'">';
            echo '<button class="profiles">'. $resultat->{'records'}[$i]->{"fields"}->{"Name"};
            echo '</button></a>'; 
            // echo " &nbsp &nbsp ";
        }
        ?>

<?php
    function showPost($posts){
        
        if($posts){
            for($i = 0; $i < count($posts); $i++){
                echo "
                <div class='card-1'>
                <h2>".$posts[$i]->{'fields'}->{'Title'}." - De <a href='index.php?post=".$posts[$i]->{'fields'}->{'Name (from Profiles)'}[0]."'> ".$posts[$i]->{'fields'}->{'Name (from Profiles)'}[0]."</a></h2>
                </div>
                <div class='card-2'>
                <p>".$posts[$i]->{'fields'}->{'Body'}."</p>
                </div>
                ";
            }
        }else{
            echo "<div class='card-3'>
            <span> Pas de commentaires enregistrés</span>
            </div>";
        }
    }
    if (isset($_GET['post'])) {
        getPost($_GET['post']);
      }
    else{
        getPost(false);
      }
    ?>
    </div>
</body>
</html>
