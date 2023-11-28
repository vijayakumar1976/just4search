<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// require_once ('Mail.php');
// require_once ('Mail/mime.php');

function sendmail($to, $subject, $message, $headers) {
    // $headers .= "Reply-To: Just4Search <info@just4search.com>\r\n"; 
    // $headers .= "Return-Path: info@just4search.com\r\n";
    // $headers .= "From: Just4Search <info@just4search.com>\r\n";
    $headers .= "Organization: Just4Search\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
  
    return mail($to, $subject, $message, $headers);
    
    // $from = 'info@just4search.com';
    
    // $headers = array(
    // 'From' => $from,
    // 'To' => $to,
    // 'Subject' => $subject,
    // 'MIME-Version' => 1,
    // 'Content-type' => 'text/html;charset=utf-8'
    // );
    
    // $smtp = Mail::factory('smtp', array(
    // 'host' => 'vps.just4search.com',
    // 'port' => '587',
    // 'auth' => true,
    // 'username' => 'info@just4search.com', //your gmail account
    // 'password' => 'R26dZjD&H' // your password
    // ));

    // $crlf = "\n";
    // $mime = new Mail_mime(array('eol' => $crlf));

    // $mime->setHTMLBody($message);
    // $body = $mime->get();
    
    // // Send the mail
    // $mail = $smtp->send($to, $headers, $body);
    
    // //check mail sent or not
    // if (PEAR::isError($mail)) {
    //     // echo '<p>'.$mail->getMessage().'</p>';
    //     return false;
    // } else {
    //     // echo '<p>Message successfully sent!</p>';
    //     return true;
    // }
}

?>
