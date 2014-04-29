<?php

function return_url($input) {

    
    $output = str_replace(
    array('á', 'č', 'ď', 'é', 'ě', 'í', 'ň', 'ó', 'ř', 'š', 'ť', 'ú', 'ů', 'ý', 'ž', ' ', '/', '.', '@'),
    array('a', 'c', 'd', 'e', 'e', 'i', 'n', 'o', 'r', 's', 't', 'u', 'u', 'y', 'z', '-', '', '', ''),
    $input);

    $output = strtolower($output);

    return $output;
}

$_POST['name'] = "michal";
$_POST['phone'] = "michal";
$_POST['email'] = "michalklapal@gmail.com";
$_POST['text'] = "testovaci zprava / mockup";


//odešle email zákazníkovi a nám
    $message = ('
    <html>
    <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <title>NOPAL</title>
    </head>
    <body style="font-family: Arial, sans-serif;">
    
    <!--header-->
    <div style="background-color: #ffffff;">
    
    <table width="550" cellpadding="0" align="center" style="margin-top: 30px; border: 0px solid #ffffff; background:#ffffff;" color:#000000;>
    <tr><td style="background:#868a6f;padding:10px;">
    
    <img src="http://qa.vinohradska85.cz/images/footer_logo.png" alt="logo">
    <!--/header-->
    <br />
    <!--body-->
    <table cellspacing="0" style="background:#ffffff; width:100%;">
      <tr>
        <td valign="top" style="text-align:left;font-size:14px; padding:0px;">
    <h2 style="padding:10px;">Thank you for your message!</h2>
    <p style="font-size:16px;color:#000000;padding:10px;">
    Here are details of your message:<br ><br >
    Your name: '.$_POST["name"].'<br >
    Your cellphone: '.$_POST["phone"].'<br >
    Your email: '.$_POST["email"].'<br >
    Your message: '.$_POST["text"].'<br >
    <br >
    We will contact you as soon as possible!<br >
    <br >
    <b>

    Petr Moťka<br/>
    T: +420 606 692 812<br/>
    E: petr.motka@nopalreality.cz<br/>
    <br/>
    Jana Sestini<br/>
    T: +420 721 800 413<br/>
    E: jana.sestini@nopalreality.cz<br/>
    </b>
    </p>
    </td>
      </tr>
    </table>
    <!--/body-->
    
    <!--footer-->
    <p style="color:#fff;padding:10px;">
    <a href="http://www.vinohradska85.cz" style="color:#333333;">www.vinohradska85.cz</a><br>
    <br>
    NOPAL s.r.o.<br>
    Dienzenhoferovy sady 2<br>
    150 00 Praha 5<br>
    <br>
    T: +420 257 317 898<br>
    E: info@nopalreality.cz<br>
    W: www.nopalreality.cz<br>
    </p>
    
    </td></tr>
    </table>
    </div>
    <!--/footer-->
    
    </body>
    </html>
    ');
    
    //echo $message;
    //echo "true";
    //exit;
    
    //uložení do souboru html
    $html_order = '../users/'.return_url($_POST['email']).'_'.date("ymdhis").'.html';
    //echo $html_order;
    $file = fopen($html_order, "w+");
    fwrite($file, $message);
    fclose($file);
    
    //echo "true";
    //exit;
    
    //odeslání mailu - zákazník
    require_once('../ext/phpmailer/class.phpmailer.php'); //nalinkuješ soubor class.phpmailer.php
    $mail = new PHPMailer(); //vytvoříš objekt mail
    
    $mail->CharSet = "UTF-8";
    $mail->ContentType     = "text/html";
    
    $add[] = array($_POST['email'], $_POST['name']);
    $add[] = array('michalklapal@gmail.com', 'Info');
    $add[] = array('petr.motka@nopalreality.cz', 'Info NOPAL');
    $add[] = array('jana.sestini@nopalreality.cz', 'Info NOPAL');
    $add[] = array('info@nopalreality.cz', 'Info NOPAL');
    //$add[] = array('michalklapal@gmail.com', 'Info');
    
    foreach ($add as $key => $val) {
    
      $mail->SetFrom('info@nopalreality.cz', 'Info NOPAL');
      $mail->AddReplyTo("info@nopalreality.cz","Info NOPAL");
      $mail->AddAddress($val[0], $val[1]);
      
      $mail->Subject    = "Vinohradska85 - contact form / kontaktni formular"; //předmět mailu 
      $mail->AltBody    = strip_tags($message); // optional, comment out and test
      $mail->MsgHTML($message);
    
      if(!$mail->Send()) {
          echo "Mailer Error: " . $mail->ErrorInfo; //pokud se mail neodešle, ohlásí chybu
          //header('Location: '.path_web.'/shop/chybna-objednavka');
      } 
      $mail->ClearAddresses();
    }

    echo "true";

?>
