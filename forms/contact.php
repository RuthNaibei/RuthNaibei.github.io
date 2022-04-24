<?php
//   /**
//   * Requires the "PHP Email Form" library
//   * The "PHP Email Form" library is available only in the pro version of the template
//   * The library should be uploaded to: vendor/php-email-form/php-email-form.php
//   * For more info and help: https://bootstrapmade.com/php-email-form/
//   */

//   // Replace contact@example.com with your real receiving email address
//   $receiving_email_address = 'naibeir84@gmail.com';

//   if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//     include( $php_email_form );
//   } else {
//     die( 'Unable to load the "PHP Email Form" Library!');
//   }

//   $contact = new PHP_Email_Form;
//   $contact->ajax = true;
  
//   $contact->to = $receiving_email_address;
//   $contact->from_name = $_POST['name'];
//   $contact->from_email = $_POST['email'];
//   $contact->subject = $_POST['subject'];
// /
//    $contact->smtp = array(
//     'host' => 'naibeir84@gmail.com',
//     'username' => 'Naibei R',
//     'password' => 'fwxyxmkxonoumqyg',
//     'port' => '587'
//   );
  

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();

  if (isset($_POST['submit'])){
    $mail_to = 'naibeir84@gmail.com';
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = 'Your message has been received';
    $message = 'The client: '. $name. ' has sent you a message as follows:'. $_POST['message'];
    $message2 = 'Dear'. $name. 'your message has been received. I will get back to you as soon as possible';
    $header = $from;
    $header2 = $mail_to;
    $result = mail($mail_to. $subject. $message. $header);
    $results2 = mail($from. $subject2. $message2. $header2);
  
    if ($result){
      echo "<script type='text/javascript'> alert('Your message has been sent successfully. Kindly check your email' )</script>";
    } 
  }

?>
