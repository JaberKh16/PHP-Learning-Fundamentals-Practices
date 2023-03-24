<?php

    // require the vendor autoload file
    require_once("./vendor/autoload.php");

    // define the namespaces we are going to use
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    // create the PHPMailer class instance
    $mailer = new PHPMailer();
    // to send SMTP Mail
    $mailer->isSMTP();

    // set SMTP Debugger To Get Any Errors Message If Happens
    $mailer->SMTPDebug = SMTP::DEBUG_SERVER;

    // set the SMTP configuration
    $mailer->Host = "localhost";
    $mailer->SMTPAuth = true; // SMTP authentication to be on
    $mailer->Username = "jaber";
    $mailer->Password = "jaberk";
    // set the encryption to be SMTP encryption
    $mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    // SMTP encryption port is 465 
    $mailer->SMTPPort = 465;

    // define sender information
    $mailer->setFrom("nahianrafi6@gmail.com", "Jaber");
    $mailer->addReplyTo("nahianrafi6@gmail.com", "Jaber");

    // define the receipent information
    $mailer->addAddress("md.jaberkhan66@gmail.com", "Jaber Khan"); // if have to send multiple receipent then write this multiple times
    $mailer->addAddress("mkhan161188@bscse.uiu.ac.bd", "Jaber Khan");

    // set the mail content
    $subject = "A Mail Sending Test";
    $messageBody = "Sending the mail from the PHPMailer <br> <p> to test the PHPMailer Package </p>";
    $messageAltBody = "Sending PHPMailer Package working fine to send the mail";
    
    
    $mailer->Subject($subject);
    // to set the mail content to be HTML
    $mailer->isHTML(true);
    $mailer->Body($messageBody);
    $mailer->AltBody($messageAltBody);


    // to attach any file
    $mailer->addAttachment('./', './composer.json');

    // to send the mail
    $mailer->send();
?>