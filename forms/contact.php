<?php
  $receiving_email_address = 'orolickiiuros@gmail.com';

  if( file_exists($php_email_form = '...forms/validate.js' )) {
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



  
  $contact->smtp = array(
    'host' => 'http://127.0.0.1:5500/index3.html',
    'username' => 'orolickiiuros@gmail.com',
    'password' => 'rusrxvpsjrpwwyfm',
    'port' => '25'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
  echo '<script>window.location.href="index2.html";</script>';
  










