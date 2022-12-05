<?php
// токен бота
define('TELEGRAM_TOKEN', '5673312760:AAGufTwa-SLlECTmExAmStQ1k5fl_0-Qyn8');
// ваш внутренний ID
define('TELEGRAM_CHATID', '-807752804');
$message = str_replace("\n", ' ', strip_tags($body));
$ch = curl_init('https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage?chat_id=' . TELEGRAM_CHATID . '&text=' . $message); // URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Не возвращать ответ
curl_exec($ch); // Делаем запрос
curl_close($ch); // Завершаем сеанс cURL
?>