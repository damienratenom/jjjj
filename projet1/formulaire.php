<!DOCTYPE html>
<html>
<head>
  <title>Connexion</title>
    <link rel="stylesheet" href="main.css"/>
</head>
<body>

<!--head-->
  <hr>
  <h1>Site internet national</h1></br>
  <hr>
<!--Connexion-->
  <fieldset>
  <legend><div id="fieldtitre"> Informations personnelles:</div></legend>
  <form action="code.php" method="post">
      <h4>Identifiant___ : <input id="identity" type="id" name="identity" /></h4>
      <h4>Mots de passe : <input type="password" name="mot_de_passe" /></h4>
      <p>En fermant le site, vous serez déconnecter.</br></br>
      <input type="submit" value="Se connecter" />
  </form>
</fieldset>
</body>
</html>
