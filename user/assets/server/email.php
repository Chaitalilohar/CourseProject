<?php

    require '../../php-mailer-folder/PHPMailerAutoload.php';

    function send_event_email($first_participant_name, $first_participant_email, $first_participant_mobile, $second_participant_name=null, $second_participant_email=null, $second_participant_mobile=null, $transaction_id, $transaction_date, $uid,$mail_event_name,$subject){
        
        
        // $mail_event_name = "career_to_corporate";
        // $subject = "Career to Corporate";

        $mail_template = '';
      
    $mail = new PHPMailer;
    
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Debugoutput = 'html';
    $mail->Host = "smtp.hostinger.com";
    $mail->Port = 465;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "admin@milestone2k24.online";
    $mail->Password = "Mohitpatil@30501";
    $mail->setFrom('admin@milestone2k24.online', 'MileStone 2k24');
    $mail->addAddress($first_participant_email, $first_participant_name);
    
    $mail->Subject = $subject;
    $mail->Body    = $mail_template;
    $mail->IsHTML(true);
    
    if (!$mail->send()) {
          $result1 = false;
      } else {
          $result1 = true;
      }

    if($second_participant_email != null){
        
        $mail = new PHPMailer;
    
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Debugoutput = 'html';
        $mail->Host = "smtp.hostinger.com";
        $mail->Port = 465;
        $mail->SMTPSecure = 'tls';
        $mail->SMTPAuth = true;
        $mail->Username = "admin@milestone2k24.online";
        $mail->Password = "Mohitpatil@30501";
        $mail->setFrom('admin@milestone2k24.online', 'MileStone 2k24');
        $mail->addAddress($second_participant_email, $second_participant_name);
        
        $mail->Subject = $subject;
        $mail->Body    = $mail_template;
        $mail->IsHTML(true);
        
        
        if (!$mail->send()) {
              $result2 = false;
          } else {
              $result2 = true;
          }
        
        return ($result1 or $result2);
    }
    return $result1;
}

?>