<!DOCTYPE html>
<html>
<body>
        <?php 
        require 'session.php';
        require 'PHPMailerAutoload.php';

        session_start();

        if(!isset($_SESSION["email"]))
        {
            echo "<script type='text/javascript'>alert('Nothing To Send')</script>";
            echo "<script type='text/javascript'>window.close()</script>";
        }

        $recipients = $_SESSION["email"];
        $error = 0;
        $errorList = '';

        $mail = new PHPMailer;

            $mail->isSMTP();                                      
            $mail->SMTPKeepAlive = true;
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true;        
            $mail->Username = "vachanamb@gmail.com";                
            $mail->Password = "vachanam2020"; 
            $mail->SMTPSecure = 'tls'; 
            $mail->Port = 587; 

            $mail->setFrom("vachanamb@gmail.com", 'Vachanam Balivediyil');

            $mail->addReplyTo("vachanamb@gmail.com");
            
            $mail->isHTML(true);

            $mail->Subject = "Subscription Expired";
            foreach ($recipients as $email) {
                
                $mail->ClearAllRecipients();
                $mail->addAddress($email[0]);

                $mail->Body = "Hello ".$email[1].",<br /><br />Your subscription for Vachanam Balivediyil&nbsp;magazine is expired.Please Renew it.<br /><br />Regards,<br />Vachanam&nbsp;Balivediyil";
                $mail->AltBody = "Your subscription for Vachanam Balivediyil magazine is expired.Please Renew it.";
 
                if($mail->Send()) {
                    echo "Message sent!\n";
                } else {
                    echo "Mailer Error: " . $mail->ErrorInfo . "\n";
                    $error = 1;
                    $errorList .= $email[1].",";
                    
                }

            }

            $mail->SmtpClose();
            if($error == 1)
            {
               echo "<script type='text/javascript'>alert('Error while sending mail to ".$errorList."!!')</script>";
            }
            else
            {
              echo "<script type='text/javascript'>alert('Mail Sent Successfully To All')</script>";
            }
            
            echo "<script type='text/javascript'>window.close()</script>";


            ?>

</body>
</html>