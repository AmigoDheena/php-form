<?php

$name = $_POST['name'];
$mailfrom = $_POST['email'];
$from = "from@domain.com";
$subject = $_POST['name'] . " submitted a contact form!";
$phone = $_POST['phone'];
$message = $_POST['message'];

// reCAPTCHA validation
if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

    // Google secret API
    $secretAPIkey = 'YOUR-SECRET-KEY';

    // reCAPTCHA response verification
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']);

    // Decode JSON data
    $response = json_decode($verifyResponse);
        if($response->success){

            $toMail = "tomail@domain.com";
            $headers ="From: Contact Form <$from>\n";
            $headers.="MIME-Version: 1.0\n";
            $headers.="Content-type: text/html; charset=iso 8859-1";

            ob_start();
            ?>
                Hi There!<br /><br />
                <?php echo ucfirst( $name ); ?>  has sent you a message via contact form on your website!
                <br /><br />
                
                Name: <?php echo ucfirst( $name ); ?><br />
                Email: <?php echo $mailfrom; ?><br />
                Subject: <?php echo $subject; ?><br />
                Phone: <?php echo $phone; ?><br />
                Message: <br /><br />
                <?php echo $message; ?>
                <br />
                <br />
                ============================================================
            <?php
            $body = ob_get_contents();
            ob_end_clean();

            mail($toMail, $subject, $body, $headers);

            $response = array(
                "status" => "alert-success",
                "message" => "Your mail have been sent."
            );
            echo $response['message']; 
        } else {
            $response = array(
                "status" => "alert-danger",
                "message" => "Robot verification failed, please try again."
            );
            echo $response['message']; 
        }       
} else{ 
    $response = array(
        "status" => "alert-danger",
        "message" => "Plese check on the reCAPTCHA box."
    );
    echo $response['message']; 
}