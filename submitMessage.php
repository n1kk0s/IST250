<?php
if (isset($_POST["name"])) {
    $to = "nweld568@gmail.com";
    $subject = "Sense8 Form";
    $name = $_POST["name"];
    $comments = $_POST["comments"];
    $message = "Name: " . $name . "\r\n\r\n";
    $message .= "Message: " . $comments;
    echo $message;
} ?><!DOCTYPE HTML>
<html>
<body>
    <?php
        echo "My PHP script";
        echo $message;
    ?>
    <h1>Thank You</h1>
    <p>Your message has been submitted!</p>
    <h1>Sorry!</h1>
    <p>Looks like there was a problem submitting your message.</p>
</body>
</html>
