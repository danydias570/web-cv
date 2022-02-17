<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Envoi d'un mail par formulaire</title>
</head>

<body>
<?php  
 
 if(isset($_POST['submit'])) {
  $mailto = "contact@diasdany.fr";
  $name = $_POST['firstname'];
  $fromEmail = $_POST['email'];
  $subject = $_POST['sujet'];
  $subject2 = "Confirmation: Message was submitted successfully | HMA WebDesign";
  
  //Email body I will receive
  $message = "Cleint Name: " . $name . "\n"
  . "Phone Number: ". "\n\n"
  . "Client Message: " . "\n" . $_POST['subject'];
  
  //Message for client confirmation
  $message2 = "Dear" . $name . "\n"
  . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
  . "You submitted the following message: " . "\n" . $_POST['subject'] . "\n\n"
  . "Regards," . "\n" . "- HMA WebDesign";
  
  //Email headers
  $headers = "From: " . $fromEmail; // Client email, I will receive
  $headers2 = "From: " . $mailto; // This will receive client
  
  //PHP mailer function
  
   $result1 = mail($mailto, $subject, $message, $headers); // This email sent to My address
   $result2 = mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client
  
   //Checking if Mails sent successfully
  
   if ($result1 && $result2) {
     $success = "Your Message was sent Successfully!";
   } else {
     $failed = "Sorry! Message was not sent, Try again Later.";
   }
  
}
  
 ?>
</body>
</html>