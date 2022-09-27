<!DOCTYPE html>
<html>

<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="../css/theme.css">
        <title> Exercise rendu </title>
</head>

<body>
        <?php
        // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
        if (isset($_FILES['monfichier']) and $_FILES['monfichier']['error'] == 0) {
                // Testons si le fichier n'est pas trop gros
                if ($_FILES['monfichier']['size'] <= 50000000) {
                        // Testons si l'extension est autorisée
                        $infosfichier = pathinfo($_FILES['monfichier']['name']);
                        $extension_upload = $infosfichier['extension'];
                        $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png', 'pdf');
                        if (in_array($extension_upload, $extensions_autorisees)) {
                                // On peut valider le fichier et le stocker définitivement
                                move_uploaded_file($_FILES['monfichier']['tmp_name'], '../uploads/' . basename($_FILES['monfichier']['name']));
                                echo "L'envoi a bien été effectué !";
                                mail('lilian.soler@didelo.fr', 'Envoi depuis la page Rendu Exercice', 'Rendu effectué', 'From: ' . $_POST['email']);
                        } else {
                                echo "L'envoi n'est pas effectué !";
                        }
                } else {
                        echo "L'envoi n'est pas effectué !";
                }
        } else {
                echo "L'envoi n'est pas effectué !";
        }
        ?>
</body>

</html>