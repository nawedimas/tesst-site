<?php

/* https://api.telegram.org/botxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - botning tokeni botfaherdan olasiz */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$message = $_POST['user_message'];
$token = "5919789926:AAEIF8_ttyEds5-Kh6B4aqnkrsgOTHA0y5o";
$chat_id = "-1001674142431";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email:' => $email,
  'Собщения:' => $message
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.php');
} else {
  echo "Error";
}
?>