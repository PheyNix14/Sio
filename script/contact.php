<div class="contact" id='contact'>
    <?php

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['mail'];
        $message = $_POST['message'];

        $mailTo = "LeoHac14pro@gmail.com";
        $headers = "From: " . $mailFrom;
        $txt = "Vous avez reçu un mail de" . $name . ".\n\n" . $message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
    }
    ?>

    <h1>Contact:</h1>

    <form class="contact-form" action="#formulaire" method="post" required id='formulaire'>
        <h3>Votre nom:*</h3>
        <input type="text" name="name" id="name" required>
        <h3>Votre e-mail:*</h3>
        <input type="text" name="mail" id="mail" required>
        <h3>Objet:*</h3>
        <input type="text" name="subject" required>
        <h3>Votre message:*</h3>
        <textarea name="message"></textarea>
        <br>
        <button class="g-recaptcha" data-sitekey="6Lf69OAZAAAAAPYF_0uhwM2xQe8ZnoxppMLVKBhF" data-callback='onSubmit' data-action='submit'>Envoyer</button>
    </form>

</div>