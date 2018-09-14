<?

$send = false;
if (!empty($_POST)) {
 $email = trim($_POST['email']);
 $name = trim($_POST['name']);
 $message = trim(htmlspecialchars($_POST['message']));	
	
}
 if ($email != '' && $name != '' && $message != '' ) {
  $to = "sales@legendcycling.com";
  $subject = "D2R Contact Form";

 	$body='<html><head></head><body>';
	$body.='Name:'.$name.'<br>Message:'.$message."<br>"."Email:".$email;
  $body.='</body></html>';

  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $headers .= 'From: <it_grp@legendcycling.com>' . "\r\n";

	if(mail($to, 'D2R Contact Us:'.$name, $body,$headers)){
    echo '<script>alert("send ok");history.go(-1);</script>';
  } else {
    echo '<script>alert("send err");history.go(-1);</script>';
  }
}


?>