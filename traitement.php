<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Réponse</title>
    <meta charset="utf-8">
  </head>

  <body>

    <h1>Salutation</h1>

    <p>
      <?php
        echo 'Bonjour ' . htmlentities($_POST['prenom']) . '!';
      ?>
    </p>

    <p>
    <?php
      echo 'Votre adresse e-mail est ' . htmlentities($_POST['email-adress']) . '.';
    ?>
    </p>

    <h1> Affichage du contenu du tableau associatif $_POST</h1>
    <?php
       var_dump ($_POST);
    ?>
  </body>
</html>