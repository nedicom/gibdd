    <?php
/* Здесь проверяется существование переменных */
$mes = $_POST['mes'];
$mes2 = $_POST['mes2'];


/* Сюда впишите свою эл. почту */
$myaddres  = "m6132@yandex.ru"; // кому отправляем
$myaddres2  = "andrey_dob_nov@mail.ru";
/* А здесь прописывается текст сообщения, \n - перенос строки */
$message = "Тема: $mes контакты: $mes2";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Данные из формы whatsapp захвата'; //сабж
$email='mail@dobrenky.nedicom.ru'; // от кого
//$send = mail ($myaddres,$sub,$message,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");
//$send2 = mail ($myaddres2,$sub,$message,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

    $params = [
        'to' => $myaddres,
        's' => $sub,
        'b' => $mes,
    ];
    $url = 'https://crm.nedicom.ru/mail/?' . http_build_query($params);
    echo '<pre>';

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    $html = curl_exec($ch);
    curl_close($ch);

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=index.html');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=index.html">
<title>Письмо направлено</title>
<meta name="generator">
<script type="text/javascript">
setTimeout('location.replace("https://dobrenky.nedicom.ru/")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script>
</head>
<body>
<h1>Спасибо! Телефон отправлен юристу! Скоро он перезвонит!</h1>
</body>
</html>
