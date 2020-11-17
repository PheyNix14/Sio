<div class="contact" id='contact'>
<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "LeoHac14pro@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>
<h1>Contact:</h1>

<form class="contact-form" action="contactform.php" method="post">
<h3>Votre nom</h3>
<input type="text" name="name" id="name">                  
<h3>Votre e-mail</h3>
<input type="text" name="mail"  id="mail" > 
<h3>Objet</h3>
<input type="text" name="subject">
<h3>Votre message</h3>
<textarea name="message"></textarea>
<button class="g-recaptcha" 
        data-sitekey="6Lf69OAZAAAAAPYF_0uhwM2xQe8ZnoxppMLVKBhF" 
        data-callback='onSubmit' 
        data-action='submit'>Envoyer</button>
</form>

</div>