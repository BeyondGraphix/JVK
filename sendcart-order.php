<?php
$to = 'you@youremail.com';
$subject = 'Simple Cart Order';

$content = $_POST;
$email_message = '';

$firstname = 'first_name';
$lastname = 'last_name';
$email_from = 'email';
$phone = 'phone';
$comments = 'comments';
//$email_message = $content[$firstname].' '.$content[$lastname]."\n".$content[$email_from]."\n".$content[$phone]."\n".$content[$comments]."\n";

$email_message .= "First Name: ".$content[$firstname]."\n";
$email_message .= "Last Name: ".$content[$lastname]."\n";
$email_message .= "Email: ".$content[$email_from]."\n";
$email_message .= "Phone: ".$content[$phone]."\n";
$email_message .= "Comments: ".$content[$comments]."\n";

//$email_message .= "\n".'========================================================'."\n";


    
$email_message .= '========================================================'."\n"."\n";

for($i=1; $i < $content['itemCount'] + 1; $i++) {
  $name = 'item_name_'.$i;
  $quantity =  'item_quantity_'.$i;
  $price = 'item_price_'.$i;
  $total = $content[$quantity]*$content[$price];
  $grandTotal += $total;
  $body .= 'Order #'.$i.': '.$content[$name].' --- Qty x '.$content[$quantity].' --- Unit Price $'.number_format($content[$price], 2, '.', '').' --- Subtotal $'.number_format($total, 2, '.', '')."\n"; 
  $body .= '========================================================'."\n";
}

$email_message .= 'Order Total: $'.number_format($grandTotal, 2, '.', '')."\n"."\n";

//$headers = 'From: webmaster@example.com'."\r\n".
$headers = 'From: '.$email_from."\r\n".
          'Reply-To: you@youremail.com' . "\r\n" .
		  'CC: '.$_POST['email']."\r\n" .
          'X-Mailer: PHP/' . phpversion();
mail($to, $subject, $body, $email_message, $headers);  
Header('Location: success-order.html');
?>
