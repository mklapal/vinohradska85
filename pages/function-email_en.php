<?php

//odešle email zákazníkovi a nám
    $message = ('
    <html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <title>AMRES.cz</title>
    </head>
    <body style="font-family: Arial, sans-serif;">
    
    <!--header-->
    <div style="background-color: #ffffff;">
    
    <table width="550" cellpadding="0" align="center" style="margin-top: 30px; border: 0px solid #ffffff; background:#ffffff;" color:#000000;>
    <tr><td style="background:#868a6f;padding:10px;">
    
    <img src="http://www.vinohradska85.cz/images/footer_logo.png" alt="logo">
    <!--/header-->
    <br />
    <!--body-->
    <table cellspacing="0" style="background:#ffffff; width:100%;">
      <tr>
        <td valign="top" style="text-align:left;font-size:14px; padding:0px;">
    <h2 style="padding:10px;">Děkujeme za Vaši zprávu!</h2>
    <p style="font-size:16px;color:#000000;padding:10px;">
    Zde jsou uvedeny Vaše údaje:<br ><br >
    Vaše jméno: '.$_POST['name'].'<br >
    Váš telefon: '.$_POST['phone'].'<br >
    Váš email: '.$_POST['email'].'<br >
    Text zprávy: '.$_POST['text'].'<br >
    <br >
    Budeme Vás kontaktovat jakmile to bude možné!<br >
    <br >
    <b>
    Jmeno<br/>
    tel.: +420 <br/>
    email: @.cz<br/>
    <br>
    </b>
    </p>
    </td>
      </tr>
    </table>
    <!--/body-->
    
    <!--footer-->
    <p style="color:#666666;padding:10px;">
    <a href="http://www.vinohradska85.cz" style="color:#333333;">www.vinohradska85.cz</a><br>
    <br>
    FIRMA s.r.o.<br>
    tel.: +420 <br>
    email: <a href="mailto:@.cz" style="color:#333333;">@.cz</a><br>
    <a href="http://www..cz" style="color:#333333;">www..cz</a><br>
    </p>
    
    </td></tr>
    </table>
    </div>
    <!--/footer-->
    
    </body>
    </html>
    ');
    
    echo $message;
    exit;
    
    //uložení do souboru html
    $html_order = '../users/'.return_url($_POST['email']).'_'.date("ymdhis").'.html';
    $file = fopen($html_order, "w+");
    fwrite($file, $message);
    fclose($file);
    
    //odeslání mailu - zákazník
    require_once('../ext/phpmailer/class.phpmailer.php'); //nalinkuješ soubor class.phpmailer.php
    $mail = new PHPMailer(); //vytvoříš objekt mail
    
    $mail->CharSet = "UTF-8";
    $mail->ContentType     = "text/html";
    
    $add[] = array($_POST['email'], $_POST['jmeno']);
    //$add[] = array('michalklapal@gmail.com', 'Info');
    $add[] = array('@.cz', 'Info');
    $add[] = array('michalklapal@gmail.com', 'Info');
    
    foreach ($add as $key => $val) {
    
      $mail->SetFrom('@.cz', 'Info');
      $mail->AddReplyTo("@.cz","Info");
      $mail->AddAddress($val[0], $val[1]);
      
      $mail->Subject    = "Vinohradska85 - kontaktni formular"; //předmět mailu 
      $mail->AltBody    = strip_tags($message); // optional, comment out and test
      $mail->MsgHTML($message);
    
      if(!$mail->Send()) {
          echo "Mailer Error: " . $mail->ErrorInfo; //pokud se mail neodešle, ohlásí chybu
          //header('Location: '.path_web.'/shop/chybna-objednavka');
      } 
      $mail->ClearAddresses();
    }

?>
