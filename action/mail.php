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
    $mail->addAddress('kirshet2000@gmail.com');

    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';
    $mail->ContentType = 'text/plain';
    // Укажите тему письма
    $mail->Subject = 'Добро пожаловать в наше сообщество по планированию правильного питания!';

    // Укажите текст письма
    $body = '<!DOCTYPE html>
    <html style="font-size: 16px;" lang="ru"><head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta name="keywords" content="​Здравствуйте '.$username.',">
    <meta name="description" content="">
    <title>Страница 3</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Страница-3.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.7.6, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#803bec">
    <meta property="og:title" content="Страница 3">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="true" class="u-body u-xl-mode" data-lang="ru">
    <section class="u-align-left u-clearfix u-container-align-center u-section-2" id="sec-ab6e">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-container-style u-grey-5 u-group u-group-1">
          <div class="u-container-layout u-valign-bottom u-container-layout-1">
            <h1 class="u-align-center u-custom-font u-text u-text-default u-text-font u-text-1"> Здравствуйте $username,</h1>
            <p class="u-align-center u-text u-text-custom-color-1 u-text-2"> Мы рады приветствовать вас в нашем <span style="font-weight: 700;">сообществе по правильному питанию</span>! Ваше желание <span style="font-weight: 700;">заботиться </span>
              <span style="font-weight: 700;">о здоровье</span> и делать осознанные выборы в питании<span style="font-weight: 700;"> важно для нас</span>.<br>
              <br>Мы постоянно работаем чтоб создавать&nbsp;<span style="font-weight: 700;">полезный и интересный контент</span>, который <span style="font-weight: 700;">поможет достичь целей</span> по здоровому питанию.<br>
              <br>Если у вас есть какие-либо&nbsp;<br>
              <span style="font-weight: 700;">вопросы, предложения</span> или просто хотите поделиться своим опытом, не стесняйтесь, <span style="font-weight: 700;">обращайтесь к нам</span>.<br>&nbsp; &nbsp; С уважением <span style="font-weight: 700;">MealPlanner</span>
              <br>
            </p>
            <a href="http://localhost/MealPlannerV2/" class="u-align-center u-btn u-btn-round u-button-style u-color-scheme-summer-time u-custom-color-2 u-radius-50 u-btn-1" target="_blank">Мечтайте и планируйте</a>
          </div>
        </div>
      </div>
    </section>
  
</body></html>
';
    $mail->Body = $body;

$mail->IsHTML(true); // Устанавливаем формат сообщения как HTML

    // Отправляем письмо
    $mail->send();
    echo json_encode('Email sent successfully');
} catch (Exception $e) {
    // тоже js
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}