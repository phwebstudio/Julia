<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<meta name="theme-color" content="#214737">
	<title>Мастерская ДжуЛия - упаковка подарков в Москве | Ваше письмо отправлено!</title>
	<link href="img/icon.png" rel="shortcut icon">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC|Comfortaa&display=swap&subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/media.css">
	<link rel="stylesheet" href="lightbox/css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="slick/slick.css">
	<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
</head>
<body>
<div class="cont">
<?php 

if(isset($_POST['submit'])){
    $to = "grey.ugh@mail.com";
    $sender_name = $_POST['sender_name'];
    $info = $_POST['sender_name'] . "\r\n" . $_POST['phone'] . "\r\n" . $_POST['message'];
    $subject = 'Обращение с сайта';
    $headers = 'From: webmaster@mail.ru' . "\r\n" .
    'Reply-To: "email"' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    mail($to,$subject,$info,$headers);
   // mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender - Отключено!
    echo "Сообщение отправлено. Спасибо Вам, " . $sender_name . ", мы скоро свяжемся с Вами.";
    echo "<br /><br /><a href='https://masterskaya-djulia.ru'>Вернуться на сайт</a>";

}

?>
</div>

<!-- <script language="JavaScript" type="text/javascript">
    function changeurl(){eval(self.location="http://pro-html.h1n.ru");}
    window.setTimeout("changeurl();", 10);
</script> -->

</body>
</html>