<?php 
    if(!isset($_SESSION['auth'])){
        session_start();
    }
    if(isset($_GET['logout'])){
        session_destroy();
        header('Location: index.php');
    }
?>

<?= isset($_SESSION['auth'])?
'<a href="profil.php" >Profil</a>
<a href="nav-btn.php?logout=true">Déconnexion</a>'
:
'<a href="inscription.php" >Inscription</a>
<a href="connexion.php">Connexion</a>'
?>