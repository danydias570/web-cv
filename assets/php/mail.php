<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un mail par formulaire</title>
</head>

<body>
    <?php
    if (isset($_POST['submit'])){
        $entete  = 'MIME-Version: 1.0' . "\r\n";
        $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
        $entete .= 'Reply-to: ' . $_POST['email'];
        $mailto = 'diasdany2708@gmail.com';
        $name = $_POST['firstname'];
        $sujet = $_POST['sujet'];
        $from = $_POST['email'];
        $subject = $_POST['subject'];
        $message = "Nom et Prénom: ". $name. "\n\n". "Mail: ". $from. "\n\n". "\n\n". $_POST['subject'];
        $headers = "De: ". $from;
        $result = mail($mailto, $sujet, $message, $headers);
        header('Location: https://diasdany.fr/pages/redirection.html');
        exit();
    }
    ?>
</body>
</html>