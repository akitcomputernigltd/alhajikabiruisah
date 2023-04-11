<?php
if (isset($S_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $myMail = "mymovieisahiyya@support.com";
    $header = "From: " . $email;
    $message2 = "You have received a mail from " . $name . ". \n\n" . $message;


    mail($myMail, $subject, $message2, $header);

    header("Locatoin: index.html?mail sent");
}
?>
