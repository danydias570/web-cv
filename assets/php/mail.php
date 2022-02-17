<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un mail par formulaire</title>
</head>

<body>
    <?php
    $retour = mail('contact@diasdany.fr', 'Envoi depuis la page Contact', $_POST['firstname'], $_POST['sujet'], $_POST['email'], $_POST['subject'], 'From: https://danydias570.github.io/web-cv/');
    if ($retour)
        echo '<p>Votre message a bien été envoyé.</p>';
    $entete  = 'MIME-Version: 1.0' . "\r\n";
    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
    $entete .= 'Reply-to: ' . $_POST['email'];
    ?>
</body>
</html>