<?php 

$name = $_POST['senderName'];
$email = $_POST['senderMail'];
$message = nl2br($_POST['senderMessage']);

// Mail code goes here
            
$body = nl2br("Name:$name.\n\n Email:$email.\n\n Message: $message");
$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Bhuvan Singh' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

//Calling the mail function

if(empty($name) or empty($email)  or empty($message)){
		$nameClass= "requiredClass";
		echo 'All fields are mandatory. Please fill all details.';
}

else{

      if(!mail("bhuvansingh206@gmail.com","New Mail From itisme.info",$body,$headers)){
	     echo 'The messgae was not send. Please try again later';
      }
      else {
            echo "success";
      }

}
$bodySender = nl2br("Dear $name.\n\n  Thank you for contacting me through www.itisme.info. I have received your mail and will try to get in touch with you as soon as possible.  \n\n Warm Regards \n Bhuvan Singh \n\n\n NOTE : This is an auto-generated mail. Feel free to reply.");

mail($email,"Received Your Mail.",$bodySender,$headers)

?>