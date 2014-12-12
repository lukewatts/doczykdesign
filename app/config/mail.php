<?php
// TODO: Update for Doczyk Design
$mail_settings = array(
  'mailer'    => 'PHPMailer', // Which mailer you wish to use ( 'PHPMailer', 'SwiftMailer' ).
  'transport' => 'smtp',      // Set the method of sending email ( 'mail', 'sendmail', 'smtp' )
  'host'      => 'mail.gmail.com', // If using smtp transport you will need to provide a host
  'username'  => '',          // If using smtp transport you will need to provide a username
  'password'  => '',          // If using smtp transport you will need to provide a password
  'recipient' => 'watts.luke@yahoo.com', // Default recipient if none is provided i.e. contact form)
  'subject'   => 'Contact Form - Doczyk Design' // Default subject if none is provided i.e. contact form)
);