<?php

$errorHandler = new ErrorHandler;
$mail = new PHPMailer();

if ( !empty( $_POST ) ) {

  $validator = new Validator($errorHandler);

  $validator->rules = array(
    'name' => array(
        'required'  => true,
        'maxlength' => 20,
        'minlength' => 3,
        'alphanumeric' => true
      ),
    'email' => array(
        'required' => true,
        'maxlength' => 255,
        'email' => true
      ),
    'comment' => array(
        'required' => true,
        'minlength' => 6
      ),
    // 'password' => array(
    //     'required' => true,
    //     'minlength' => 6
    //   ),
    // 'retype_password' => array(
    //     'match' => 'password'
    //   ),
    );

  if ( $mail_settings['host'] == 'smtp' ) {
    $mail->IsSMTP();
    $mail->Host = $mail_settings['host'];
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'ssl';
    $mail->SMTPDebug = 1;
    $mail->SMTPUsername = $mail_settings['username'];
    $mail->SMTPPassword = $mail_settings['password'];
  }

  $mail->AddAddress( $mail_settings['recipient'], "Marie Keely" );
  $mail->Subject    = $mail_settings['subject'];
  $mail->FromName   = $_POST['name'];
  $mail->From       = $_POST['email'];
  $mail->AddReplyTo( $_POST['email'], $mail->FromName );
  $mail->SetFrom( $_POST['email'], $_POST['name'] );
  $mail->Body       = $_POST['comment'];

  $validation = $validator->check( $_POST );

  if ( $validation->fails() ) {
    
    $validation_errors = array(
      'name'    => $validation->errors()->first( 'name' ),
      'email'   => $validation->errors()->first( 'email' ),
      'comment' => $validation->errors()->first( 'comment' )
    );

    $class = 'error';
    $form_output = '';
  }
  elseif ( !$mail->Send() ) {
    
    $message = array(
      'title' => 'Oops!',
      'body'  => $mail->ErrorInfo
    );

    $class = 'error';
    $format = '<h4>%s</h4>' . PHP_EOL . '<p>%s</p>';
    $form_output = sprintf( $format, $message['title'], $message['body'] );

  }
  else {
    
    $message = array(
      'title' => 'Message Sent!',
      'body'  => 'Thank you ' . $mail->FromName . '. We\'ll get back to you soon!'
    );

    $class = 'success';
    $format = '<h4>%s</h4>' . PHP_EOL . '<p>%s</p>';
    $form_output = sprintf( $format, $message['title'], $message['body'] );

  }
}

