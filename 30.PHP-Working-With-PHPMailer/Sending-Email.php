<?php

    // require the vendor autoload file
    require_once("./vendor/phpmailer/phpmailer/src/PHPMailer.php");
    require_once("./vendor/phpmailer/phpmailer/src/SMTP.php");

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
    // SMTP host for the gmail is "smtp.gmail.com"
    $mailer->Host = "smtp.gmail.com"; 
    $mailer->SMTPAuth = true; // SMTP authentication to be on
    // SMTP username for the particular email is the email address
    $mailer->Username = "mkhan161188@bscse.uiu.ac.bd";
    // SMTP password for the particular email is the pass which was automatically generated when setup smtp
    $mailer->Password = "enter your SMTP password";
    // set the encryption to be SMTP encryption
    $mailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    // SMTP encryption port is 465 
    $mailer->Port = 465;

    // define sender information
    $mailer->setFrom("mkhan161188@bscse.uiu.ac.bd", "Jaber");
    $mailer->addReplyTo("mkhan161188@bscse.uiu.ac.bd", "Jaber");

    // define the receipent information
    $mailer->addAddress("md.jaberkhan66@gmail.com", "Jaber Khan"); // if have to send multiple receipent then write this multiple times
    // $mailer->addAddress("mkhan161188@bscse.uiu.ac.bd", "Jaber Khan");

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