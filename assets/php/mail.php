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
        $subject2 = "Votre message s'est bien envoyé.";
        $message = "Nom Client: ". $name. "A écrit ce message". "\n\n". $_POST['subject'];
        $message2 = "Cher ".$name. "\n\n" ."merci pour votre message, à  bienôt.";
        $headers = "De: ". $from;
        $headers2 = "De: ". $mailto;
        $result = mail($mailto, $sujet, $subject, $headers);
        $result2 = mail($from, $subject2, $message2,$headers2);
        header('Location: https://diasdany.fr/pages/redirection.html');
        exit();
    }
    ?>
</body>
</html>