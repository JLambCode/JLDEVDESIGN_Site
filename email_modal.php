<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    require_once __DIR__ . '/vendor/autoload.php';
    $errors = [];
    $errorMessage = '';

    if (!empty($_POST)) {
        if(isset($name) || isset($email) || isset($message)){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
        
            if (empty($name)) {
                $errors[] = 'Name is empty';
            }
    
            if (empty($email)) {
                $errors[] = 'Email is empty';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Email is invalid';
            }
    
            if (empty($message)) {
                $errors[] = 'Message is empty';
            }
    
            if (!empty($errors)) {
                $allErrors = join('<br/>', $errors);
                $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
            } else {
                $mail = new PHPMailer();
         
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'jlamb.code@gmail.com';
                $mail->Password = 'getShwifty00';
                $mail->SMTPSecure = 'tls';
                $mail->Port = 2525;
                $mail->setFrom($email, 'JLamb Dev and Design');
                $mail->addAddress('jlamb.code@gmail.com', 'Me');
                $mail->Subject = 'New message from your website';
         
                // Enable HTML if needed
                $mail->isHTML(true);
                $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", nl2br($message)];
                $body = join('<br />', $bodyParagraphs);
                $mail->Body = $body;
                echo $body;
         
                if($mail->send()){
                    header('Location: thank-you.html'); // Redirect to 'thank you' page. Make sure you have it
                } else {
         
                    $errorMessage = 'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
                }
            }
        }
        
    } else {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }
?>
<div class="modal" id="email-modal">
        <div class="modal-content">
            <span class="modal-close-btn">&times;</span>
            <form action="/swiftmailer_form.php" method="POST" class="modal-form" id="contact-form">
                <h1>What can I do for you?</h1>
                <?php echo((!empty($errorMessage)) ? $errorMessage : '') ?>
                <input type="text" class="modal-input-single-line" name="name" placeholder="Enter your name...">
                <input type="email" class="modal-input-single-line" name="email" placeholder="Enter your email...">
                <textarea class="modal-input-multi-line" name="message" rows="4" cols="50" placeholder="Enter your message..."></textarea>
                <div>
                    <input type="submit" class="btn contact-btn modal-input-btn" value="Send">
                </div>
            </form>
        </div>
    </div>