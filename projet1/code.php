<!DOCTYPE html>
<html>
<head>
  <title>Connection accomplie</title>
  <link rel="stylesheet" href="main.css"/>
</head>
<body>

  <?php

    //identifiant et mot de passe de l'utilisateur
    /*if (isset($_POST['identity']) && $_POST['identity'] == "Damien")//id
    {

    }*/
    if (isset($_POST['mot_de_passe']) && $_POST['mot_de_passe'] == "test")//mdp

    //hash beta a verifier
    {
    echo password_hash('mot_de_passe', PASSWORD_DEFAULT);
    echo "<br/>";
    $hash = password_hash('mot_de_passe', PASSWORD_DEFAULT);
    echo $hash;
    echo "<br/>";
    if (password_verify('mot_de_passe', $hash)) {
        echo 'Le mot de passe est valide !';
    }
    //erreur id ou mot de passe
    else
      {
          echo 'Le mot de passe est invalide.';
      }

    echo "<hr>";
    session_start();

    // On s'amuse à créer quelques variables de session dans $_SESSION
    $_SESSION['prenom'] = 'Damien';
    $_SESSION['nom'] = 'RATENOM';
    $_SESSION['age'] = 16;

    $id= $_POST['identity'];
    echo "<h1>Bienvenue $id sur notre site internet.</h1>";

  }

    //Redirection vers page d'erreur
    else
      {
        //echo 'Identifiant ou mot de passe incorect. <a href="formulaire.php">Retour</a>';
        header('Location: error.php');
      }

  ?>

</body>
</html>
