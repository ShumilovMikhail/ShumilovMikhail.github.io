<?php

/* https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$number = $_POST['user_number'];
$token = "5751474018:AAE3Wt-ZmiG5rug0HLrk7LLE7BY-HRHgV_M";
$chat_id = "-870486384";
$arr = array(
  'Номер телефона пользователя: ' => $number,
);

foreach ($arr as $key => $value) {
  $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
