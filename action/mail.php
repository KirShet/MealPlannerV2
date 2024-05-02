<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

// Создаем новый экземпляр PHPMailer
$mail = new PHPMailer(true);

// Получаем адрес электронной почты из $_POST
$email = $_POST['email'];

// Обрезаем адрес до символа '@'
$email_parts = explode('@', $email);
$username = $email_parts[0];

try { 
    //  IMAP применяется для получения почты с сервера, а SMTP - для отправки.
    // Настройки почтового сервера
    $mail->isSMTP();
    $mail->Host = 'smtp.rambler.ru'; // Укажите адрес SMTP-сервера
    $mail->SMTPAuth = true;
    $mail->Username = 'kirshet2000@rambler.ru'; // Укажите имя пользователя SMTP
    $mail->Password = 'Qwerty789'; // Укажите пароль SMTP
    $mail->SMTPSecure = 'ssl'; // Укажите тип шифрования (например, tls или ssl)
    $mail->Port = 465; // Укажите порт SMTP

    // Укажите адрес отправителя и имя отправителя
    $mail->setFrom('kirshet2000@rambler.ru');

    // Укажите адрес получателя
    $mail->addAddress($email);

    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->ContentType = 'text/plain';
    // Укажите тему письма
    $mail->Subject = 'Добро пожаловать в наше сообщество по планированию правильного питания!';

    // Укажите текст письма
    $body = '<div style="margin:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;min-width:100%;background-color:#ffffff">
        <div style="max-width:600px;margin:0 auto;margin-top:0px">
            <table width="600" bgcolor="#ffffff" align="center" cellspacing="0" cellpadding="0" border="0" style="border-spacing:0;margin:0 auto">
        <tbody><tr>
          <td bgcolor="#ffffff" align="center" style="padding-top:0px;padding-bottom:16px;padding-top:24px;padding-right:27px;padding-left:27px;width:100%;font-size:0;background-color:#020203;/* border-radius: 16px; */border-top-left-radius: 16px;border-top-right-radius: 16px;">						
            <table width="100%" align="center" cellpadding="0" cellspacing="0">
              <tbody><tr>
                <td valign="bottom" style="width:100%;min-width:130px">
                  <table width="100%" align="left" cellpadding="0" cellspacing="0" style="width:100%;max-width:418px;min-width:130px;border-spacing:0">
                    <tbody><tr>
                      <td align="left">
                        <a href="https://canvas-generations-v1.s3.us-west-2.amazonaws.com/98a2823c-59e4-4efa-ac05-006bb2329a04.png" style="text-decoration:none" target="_blank">
                          <img alt="MealPlanner" src="https://canvas-generations-v1.s3.us-west-2.amazonaws.com/98a2823c-59e4-4efa-ac05-006bb2329a04.png" style="height:auto;border:0;width: 161px;aspect-ratio: auto 105 / 40;" data-bit="iit">
                        </a>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
                <td valign="bottom">
                  <table dir="ltr" width="100%" align="right" cellpadding="0" cellspacing="0" style="width:100%;width:330px">
                    <tbody><tr>
                      <td dir="ltr" align="right" style="font-size:0px;padding-bottom:4px">
                        <table width="122" align="right" cellpadding="0" cellspacing="0" style="display:inline-table;vertical-align:bottom">
                          <tbody><tr>
                            <td width="122" align="right" valign="bottom" style="font-size:12px;line-height:16px;font-family:Inter,Arial,sans-serif;color:#818181">
                              <a href="https://canvas-generations-v1.s3.us-west-2.amazonaws.com/98a2823c-59e4-4efa-ac05-006bb2329a04.png" style="color:#818181;text-decoration:underline" target="_blank">Наша страница</a>
                            </td>
                          </tr>
                        </tbody></table>
                        <table width="75" align="right" cellpadding="0" cellspacing="0" style="display:inline-table;vertical-align:bottom">
                          <tbody><tr>
                            <td width="75" align="right" valign="bottom" style="font-size:12px;line-height:16px;font-family:Inter,Arial,sans-serif;color:#818181">
                              <a href="https://canvas-generations-v1.s3.us-west-2.amazonaws.com/98a2823c-59e4-4efa-ac05-006bb2329a04.png" style="color:#818181;text-decoration:underline" target="_blank">Наша страница</a>
                            </td>
                          </tr>
                        </tbody></table>												
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>
          </td>
        </tr>
        <tr>
          <td>
            <table bgcolor="#EEF2F6" width="100%" align="left" cellpadding="0" cellspacing="0" style="border-radius:16px">
              <tbody><tr>
                <td>
                  <table style="width:100%;border-collapse:collapse;border-spacing:0;margin:0;border:0" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                      <td align="center" style="padding-bottom:0px">
                        <a href="https://canvas-generations-v1.s3.us-west-2.amazonaws.com/98a2823c-59e4-4efa-ac05-006bb2329a04.png" style="color: #000000;/* text-decoration:underline; */text-decoration: none;" target="_blank">
                          <h1> Здравствуйте '.$username.'</h1>
                          <p> Мы рады приветствовать вас в нашем <span style="font-weight: 700;">сообществе по правильному питанию</span>! Ваше желание <span style="font-weight: 700;">заботиться </span>
                            <span style="font-weight: 700;">о здоровье</span> и делать осознанные выборы в питании<span style="font-weight: 700;"> важно для нас</span>.<br>
                            <br>Мы постоянно работаем чтоб создавать&nbsp;<span style="font-weight: 700;">полезный и интересный контент</span>, который <span style="font-weight: 700;">поможет достичь целей</span> по здоровому питанию.<br>
                            <br>Если у вас есть какие-либо&nbsp;<br>
                            <span style="font-weight: 700;">вопросы, предложения</span> или просто хотите поделиться своим опытом, не стесняйтесь, <span style="font-weight: 700;">обращайтесь к нам</span>.<br>&nbsp; &nbsp; С уважением <span style="font-weight: 700;">MealPlanner</span>
                            <br>
                          </p>
                        </a>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>						
              <tr>
                <td align="center" style="padding-right:12px;padding-left:12px;padding-bottom:0px">						
                  <table width="100%" align="center" cellpadding="0" cellspacing="0" style="width:100%;max-width:580px;border-radius:12px">
                    <tbody>
                  </tbody></table>
                </td>
              </tr>
              <tr>
                <td align="left" style="padding-left:14px;padding-right:14px;padding-bottom:16px;padding-top:16px">
                  <table width="100%" cellpadding="0" cellspacing="0" style="/* background-color:#ff2722; */border:1px solid #ff2722;border-radius:23px;background-color: #ee6a4e;">
                    <tbody><tr>
                      <td align="center" valign="middle" height="46" style="font-size:17px;line-height:18px;font-family:Inter,Arial,sans-serif;color:#ffffff">
                        <a href="https://canvas-generations-v1.s3.us-west-2.amazonaws.com/98a2823c-59e4-4efa-ac05-006bb2329a04.png" style="text-decoration:none;color:#ffffff;display:block;padding-top:14px;padding-bottom:14px;text-align:center" target="_blank">Мечтайте и планируйте</a>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody></table>
          </td>
        </tr>				
      </tbody></table>
        </div>
  </div>
';
    $mail->Body = $body;

$mail->IsHTML(true); // Устанавливаем формат сообщения как HTML

    // Отправляем письмо
    $mail->send();
    echo json_encode('Email sent successfully');
} catch (Exception $e) {
    // тоже js
    echo json_encode("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
}