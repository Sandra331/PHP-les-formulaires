<!DOCTYPE html>
<html>

<head>

    <title>Ma page de test</title>
</head>

<body>
    <h1> Affichage des données du formulaire</h1>

    <ul>
        <li><?php echo $_POST['user_prénom']; ?></li>
        <li><?php echo $_POST['user_nom']; ?></li>
        <li><?php echo $_POST['motif']; ?></li>
        <li><?php echo $_POST['user_email']; ?></li>
        <li><?php echo $_POST['phone']; ?></li>
        <li><?php echo $_POST['user_message']; ?></li>
    </ul>
    <p>Merci <?= $_POST['user_prénom'] . ' ' . $_POST['user_nom'] ?> de nous avoir contacté à propos de
        <?= $_POST['motif'] ?>.<br><br>

        Un de nos conseillers vous contactera soit à l'adresse <?= $_POST['user_email'] ?> ou par téléphone au
        <?= $_POST['phone'] ?> dans les plus brefs délais pour traiter votre demande:

        <?= $_POST['user_message'] ?></p>


</body>

</html>



</html>