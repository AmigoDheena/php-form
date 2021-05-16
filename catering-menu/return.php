<html>
<head>
<title>Order Placed</title>
<style>
.response-text {
    display: inline-block;
    max-width: 550px;
    margin: 0 auto;
    font-size: 1.5em;
    text-align: center;
    background: #fff3de;
    padding: 42px;
    border-radius: 3px;
    border: #f5e9d4 1px solid;
    font-family: arial;
    line-height: 34px;
}
</style>
</head>
<body>
    <div class="response-text"> You have placed your order successfully.<br> Thank you for shopping with us! </div>

    <?php 

// Mail
$subject = "Your Order Received.!";
$from = 'amigodheena@gmail.com';

// More headers
$headers .= 'From: <amigodheena@gmail.com>' . "\r\n";
$headers .= 'Cc: amigodheena@gmail.com' . "\r\n";

$headers.="MIME-Version: 1.0\n";
$headers.="Content-type: text/html; charset=iso 8859-1";

ob_start();
?>
	Hi There!<br /><br />
	<?php echo ucfirst( $name ); ?>  Your order received successfully!
	<br /><br />
	
	Name: <?php echo ucfirst( $_COOKIE['name'] ); ?><br />
	Email: <?php echo $_COOKIE['email']; ?><br />
	Subject: <?php echo $subject; ?><br />
	
	Message: <br /><br />
	<?php 
	echo "Course: " . $_COOKIE['course'] ."<br>";
	echo "Starter: " . $_COOKIE['starter'] ."<br>";
	echo "Bread: " . $_COOKIE['bread'] ."<br>";
	echo "Rice: " . json_decode($_COOKIE['rice'], true) ."<br>";
	
	foreach (json_decode($_COOKIE['rice']) as $key => $value) {
		echo "<tr><td>$key</td><td>$value</td></tr>";
	}

	echo "Non-veg: " . $_COOKIE['nonveg'] ."<br>";
	
	foreach (json_decode($_COOKIE['salad']) as $key => $value) {
		echo "<tr><td>$key</td><td>$value</td></tr>";
	}
	echo "Salad:" . $_COOKIE['salad'] ."<br><br>";

	echo "Name: " . $_COOKIE['name'] ."<br>";
	echo "Mobile: " . $_COOKIE['mobile'] ."<br>";
	echo "Email: " . $_COOKIE['email'] ."<br>";
	echo "Address: " . $_COOKIE['address'] ."<br>";
	echo "Develvery Address: " . $_COOKIE['develveryaddress'] ."<br>";
	echo "Date: " . $_COOKIE['date'] ."<br>";
	echo "Delevery Time: " . $_COOKIE['delevery_time'] ."<br>";
	echo "Coupon Code: " . $_COOKIE['coupon_code'] ."<br>";
	?>
	<br />
	<br />
	============================================================
<?php
$body = ob_get_contents();
ob_end_clean();

$to = $_COOKIE['email'];
$too = $from;

$s = mail($to,$subject,$body,$headers,"-t -i -f $from");
$s = mail($too,$subject,$body,$headers,"-t -i -f $from");

if( $s == 1 ){
	echo '<div class="success"><i class="fa fa-check-circle"></i> Confirmation mail has been sent successfully.</div>';
	setcookie("course", "",time()-3600);
	setcookie("starter", "",time()-3600);
	setcookie("bread", "",time()-3600);
	setcookie("rice", "",time()-3600);
	setcookie("nonveg", "",time()-3600);
	setcookie("salad", "",time()-3600);
	setcookie("dessert", "",time()-3600);

	setcookie("name", "",time()-3600);
	setcookie("mobile", "",time()-3600);
	setcookie("email", "",time()-3600);
	setcookie("address", "",time()-3600);
	setcookie("develveryaddress", "",time()-3600);
	setcookie("date", "",time()-3600);
	setcookie("delevery_time", "",time()-3600);
	setcookie("info", "",time()-3600);
	setcookie("coupon_code", "",time()-3600);
}else{
	echo '<div>Confirmation mail sending failed!</div>';
}
// Mail
?>

</body>
</html>