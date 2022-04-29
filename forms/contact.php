<?php
  $receiving_email_address = 'orolickiiuros@gmail.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-emailform.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact->ajax = true;
  $email_to =   'orolickiiuros@gmail.com'; 
$name     =   $_POST['name'];  
$email    =   $_POST['email'];
$subject  =   $_POST['subject'];
$message  =   $_POST['message']. "\n\n";
$headers  = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

if(mail($email_to, $subject, $message, $headers)){
    echo 'sent'; //       
}else{
    echo 'failed';// 
}
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];


  
  $contact->smtp = array(
    'host' => 'http://127.0.0.1:5500/',
    'username' => 'orolickiiuros@gmail.com',
    'password' => 'rusrxvpsjrpwwyfm',
    'port' => '587'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
