<?php
if (isset($_GET['op'])) {
    switch ($_GET['op']) {
        case "plus":
            $op = "+";
            break;
        case "moins":
            $op = "-";
            break;
        default:
            $op = "x";
            break;
    }
} else {
    $op = "x";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>TP 1 - Exo 3</title>
    <meta name="author" content="SOLER Lilian">
    <link rel="stylesheet" href="../css/tp1.css">
    <link rel="stylesheet" href="../css/exo3.css">
    <script src="../js/entrainement_op.js"></script>
</head>

<body onload="nouvelle();">
    <h1>TP 1 - Exo 3</h1>
    <hr>

    <div>
        <p id="op">
            <span id="nombre1">0</span> <?php echo $op; ?> <span id="nombre2">0</span> = <input id="proposition" type="number" />
        </p>
        <p>
            <?php echo '<input id="bouton" type="button" value="Vérifier" onclick="valider(' . "'" . $_GET['op'] .  "'" . ')" />'; ?>
        </p>
        <p id="resultat" style="visibility: hidden">
            Ici, on affiche 'Bonne' ou 'Mauvaise' réponse
        </p>
    </div>
    <p style="align-self: center"><button id="changeOp" onClick="changeOp()">Changer d'opération</button></p>
    <p style="align-self: center"><button id="changeMax" onClick="changeMax()">Changer nombre maximum</button></p>
</body>
</body>

</html>