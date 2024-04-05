<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMail/Exception.php';
require 'PHPMail/PHPMailer.php';
require 'PHPMail/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST["name"]) ? $_POST["name"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $message = isset($_POST["message"]) ? $_POST["message"] : '';
    $subject = isset($_POST["subject"]) ? $_POST["subject"] : '';

    // Instantiate PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com'; // SMTP server
        $mail->SMTPAuth   = true;
        $mail->Username   = 'yourmail@gmail.com'; // Your SMTP account mail id
        $mail->Password   = 'dfghjtyuiedf';  // Your SMTP account password
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom($email, $name);
        $mail->addAddress('yourmail@gmail.com'); // Add a recipient

        // Content
        $mail->isHTML(false); 
        $mail->Subject = 'Subject: ' . $subject;
        $mail->Body    = "Name: $name\nEmail: $email\nMessage: $message";

        $mail->send();
        echo "<script>window.alert('Message has been sent successfully!');
              window.location.href = 'index.php';
        </script>";
        
    } catch (Exception $e) {
        echo "<script>window.alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');
              window.location.href = 'index.php';
        </script>";
    }
}
?>



