<!DOCTYPE html>
<html>
<?php //TODO: rewrite this page using vue.js ?>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/theme.css">
  <link rel="stylesheet" type="text/css" href="../css/_index.css">
  <link rel="stylesheet" type="text/css" href="../css/cours.css">
  <link rel="stylesheet" type="text/css" href="../css/rendu.css">
  <title>Rendu Exercise</title>
</head>

<body>
  <div class='tout'>
    <div class="html">
      <form action="cible_exercice.php" method="post" enctype="multipart/form-data">
        <p>
          Formulaire d'envoi de fichier :(jpg, jpeg, gif, png, pdf)<br />
          <br />
          <label>Email</label>
          <input type="email" name="email" required><br /><br />
          <input type="file" name="monfichier" /><br />
          <input type="submit" value="Envoyer le fichier" />
        </p>
      </form>
    </div>
  </div>
</body>

</html>