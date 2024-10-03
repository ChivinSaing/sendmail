<?php
   
   use PHPMailer\PHPMailer\PHPMailer;
   use PHPMailer\PHPMailer\Exception;
   
       include ("PHPMailer/src/SMTP.php");
       include ("PHPMailer/src/Exception.php");
       include ("PHPMailer/src/PHPMailer.php");
       if(isset($_POST['btn_send'])){
           $name       = $_POST['name'];
           $subject    = $_POST['subject'];
           $email      = $_POST['email'];
           $message    = $_POST['message'];
           $mail = new PHPMailer(true);
           try {
               $mail->isSMTP();
               $mail->Host = "smtp.gmail.com";
               $mail->SMTPAuth = true;
               $mail->Username = "chivinsaing24@gmail.com"; // smtp gmail account
               $mail->Password = "azek qchb sssq utsx";
               $mail->Port = 465;
               $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
               $mail->setFrom($email);
               $mail->addAddress('chivinsaing24@gmail.com');
               $mail->Subject = $subject;
               $mail->isHTML(true);
               $mail->Body = "My name is $name <br> Email is $email <br> And Message is $message";//Message
               $mail->send();
               header('Location: thanks.php');
   
           } catch (Exception $e) {
               
           }
       }
   
?>