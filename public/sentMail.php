<?php

if (isset($_POST['submit'])) {
    $to = 'edalscript@gmail.com';

    //sender's info
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mail = $_POST['mail'];
    $message = str_replace("\n.", "\n..", $_POST['message']);

    //structure
    $message = "Sender's name: " . $name . "\n"
        . "Message: " . "\n" . $_POST['message'];

    //header 
    $headers = "From: $mail";

    //mailer
    $result = mail('edalscript@gmail.com', 'Message from Portfolio', $headers, $subject, $message);

    //confirmation on screen
    if ($result) {
?> <html>

        <body>
            Your email has been sent successfully, I will be getting back to you shortly!
        </body>

        </html>
    <?php
    } else {
    ?><html>

        <body>
            Your message was not sent. Please try again later
        </body>

        </html>
<?php
    }
}
?>