
<?php
    
    $name = $_POST['name'];
    $mailfrom = $_POST['email'];
    $from = "from@from.com";
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    
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
    
    $to = 'to@yourmailid.com';

    $s = mail($to,$subject,$body,$headers,"-t -i -f $from");

    if( $s == 1 ){
        echo '<div class="alert alert-success" role="alert"> Your message has been sent successfully.</div>';
    }else{
        echo '<div class="alert alert-danger" role="alert">Your message sending failed!</div>';
    }
?>