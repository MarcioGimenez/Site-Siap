<?php 
require 'PHPMailer-master/PHPMailerAutoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
$mail->Debugoutput = 'html';
//Set the hostname of the mail server
$mail->Host = "smtp.zoho.com";
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = "contato@siapagro.com";
//Password to use for SMTP authentication
$mail->Password = "siapagro123*";
//Set who the message is to be sent from
$mail->setFrom('contato@siapagro.com', 'Email Contato');
//Set an alternative reply-to address
//$mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('contato@siapagro.com', 'Contato');
//Set the subject line
$mail->Subject = 'Email de contato do Site';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body


$html = '<!DOCTYPE html>
<html>
<head>
</head>
<body style="background-color:#f8f8f8 ">
<table style="padding: 0px; outline: 0px; border: 0px currentColor; border-image: none; width: 100%; font-size: 100%; vertical-align: baseline; border-collapse: collapse;" border="0" align="center" bgcolor="#f8f8f8">
<tbody style="padding: 0px; border: 0; outline: 0; font-size: 100%; vertical-align: baseline;">
<tr style="padding: 0px; border: 0; outline: 0; font-size: 100%; vertical-align: baseline;">
<td style="background-color: #f8f8f8; border: 0; padding: 0px; outline: 0; font-size: 100%; vertical-align: baseline;">
<table style="padding: 0px; outline: 0px; border: 0px currentColor; border-image: none; width: 560px; font-size: 100%; vertical-align: baseline; border-collapse: collapse;" border="0" align="center">
<tbody style="padding: 0px; border: 0; outline: 0; font-size: 100%; vertical-align: baseline;">
<tr style="padding: 0px; border: 0; outline: 0; font-size: 100%; vertical-align: baseline;">
<td style="padding: 26px 0px 0px 16px; border: 0; outline: 0; font-size: 13px; vertical-align: baseline; color: #a1a1a1; font-family: Arial,Helvetica, sans-serif;" align="center"> </td>
</tr>
</tbody>
</table>
<table style="padding: 0px; outline: 0px; border: 1px solid #e2e2e2; border-bottom: 0; border-image: none; width: 560px; font-size: 100%; vertical-align: baseline; border-collapse: collapse;" border="0" align="center" bgcolor="#ffffff">
<tbody style="padding: 0px; border: 0; outline: 0; font-size: 100%; vertical-align: baseline;">
<tr style="padding: 0px; border: 0; outline: 0; font-size: 100%; vertical-align: baseline;">
<td style="padding: 10px 28px; border: 0; outline: 0; vertical-align: middle; line-height: 100%; height: 26px;" align="left" valign="middle" height="26">
<table style="padding: 0; outline: 0; border: 0; width: 100%; vertical-align: baseline; border-collapse: collapse;">
<tbody>
<tr>
<td style="width: 154px;" align="left">
<!-- Logo image --> 

<div id="container-logo" class="container-logo" style="left: 0px;top: 0px;width: 247.77px;height: 60px;">
    <img id="logo-image" src="http://siapagro.org/Site-Siap/img/logo.png" style="width: 100%;display: block;max-width: 100%;height: auto;"/>
</div>

</td>

</tr>
</tbody>
</table>
</td>
</tr>

<tr style="padding: 0px; border: 0; outline: 0; font-size: 100%; vertical-align: baseline;">
<td style="text-align: left; padding: 0 28px 26px; border: 0px; outline: 0px; vertical-align: baseline; line-height: 25px;background: #f6f6f6;" align="left">
<table style="width: 504px; padding: 0px; border: 0; outline: 0; font-size: 100%; vertical-align: baseline; margin: 0 0 10px;">
<tbody>
<tr style="padding: 0; margin: 0;">
<!-- conteudo -->
<td style="padding: 7px 20px; background: #f6f6f6;">
Mensagem do site https://siapagro.com<br/></br>

<b>Nome Remetente:</b> '.addslashes($_POST['nome']).' <br/>

<b>Email Remetente:</b> '.addslashes($_POST['email']).' <br/>

<b>Mensagem:</b> '.addslashes($_POST['msg']).' <br/>


</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!--  footer -->
<table style="padding: 0px; width: 560px; text-align: left; vertical-align: top; outline: 0px; border: 1px solid #999; font-size: 100%; border-collapse: collapse; position: relative; border-spacing: 0;" border="0" align="center">
<tbody>
<tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
<td class="wrapper last" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; position: relative; color: #ffffff; font-weight: normal; line-height: 20px; font-size: 13px; height: 20px; background: #999; margin: 0; padding: 10px 0px 0px;" align="left" valign="top">
<table class="twelve columns" style="margin: 0px auto; padding: 0px; width: 560px; text-align: left; vertical-align: top; border-collapse: collapse; border-spacing: 0;">
<tbody>
<tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
<td style="width: 304px; word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: middle !important; text-align: left !important; min-width: 0px; color: #ffffff; f font-weight: normal; line-height: 20px; font-size: 13px; height: 20px; background: #999; margin: 0; padding: 0px 15px 10px;" align="left" valign="middle">
<p style="color: #ffffff;font-weight: normal; text-align: left !important; line-height: 20px; font-size: 13px; vertical-align: middle !important; margin: 0px; padding: 0;" align="left">
© '.date(Y).' siapagro.com
</p>
</td>
<td class="expander" style="word-break: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0px; color: #ffffff; font-weight: normal; line-height: 20px; font-size: 13px; height: 20px; background: #999; margin: 0; padding: 0;" align="left" valign="top"> </td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- fim footer -->
</td>
</tr>
</tbody>
</table>
</body>
</html>';

$mail->msgHTML(utf8_decode($html));
//Replace the plain text body with one created manually
//$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    //echo "Mailer Error: " . $mail->ErrorInfo;
    header('Location: https://siapagro.com/Site-Siap/contato.php?msg=erro');
} else {
    header('Location: https://siapagro.com/Site-Siap/contato.php?msg=ok');
}

