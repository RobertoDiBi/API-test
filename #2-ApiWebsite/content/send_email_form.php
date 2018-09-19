<?php
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$visitor_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$subject = filter_input(INPUT_POST, 'subject',FILTER_SANITIZE_STRING);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);


$email_from = 'robertodibi92@gmail.com';
$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n" . "\nSubject: $subject\n" . "Here is the message:\n $message \n\n" .
        $to = "robertodibi92@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
$success = mail($to, $email_subject, $email_body, $headers);
?>

<style>
    .header{
        font-size: 40px;
        color: #004085;
        font-weight: bold;
    }
</style>
<div class="container" style="margin-top: 10%;"><?php if (isset($success) && $success) {
    echo "<h2 class='header'>Thank you for contacting us.<br/> We will be in touch with you very soon.</h2><br/> <div class='container' style='text-align: center'> <img src='assets/img/mail.gif' alt='Email sent gif' height='300'/></div>";
} else {
    echo "<h2 class='header'>Sorry! An error has occured. Please try again later.</h2> <br/> <div class='container'><img src='assets/img/Gmail.gif' class='img-fluid' alt='Email not sent gif' style='margin-left:30%;'/></div>";
}
?>
</div>

