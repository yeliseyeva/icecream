PHP
<?php
 
/* https://api.telegram.org/bot1317337591:AAFKI0SwiwXrwg9jQbuqxPqOdrsNsCBBS0k/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */
 
//Переменная $name,$phone, $mail получает данные при помощи метода POST из формы
$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$address = $_POST['user_address'];
$order1 = $_POST['ice-cream'];
$order_size1 = $_POST['size1'];
$order2 = $_POST['ice-coffee'];
$order_size2 = $_POST['size2'];
$order3 = $_POST['milkshakes'];
$order_size3 = $_POST['size3'];
 
//в переменную $token нужно вставить токен, который нам прислал @botFather
$token = "1317337591:AAFKI0SwiwXrwg9jQbuqxPqOdrsNsCBBS0k";
 
//нужна вставить chat_id (Как получить chad id, читайте ниже)
$chat_id = "-1612864198";
 
//Далее создаем переменную, в которую помещаем PHP массив
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);
 
//При помощи цикла перебираем массив и помещаем переменную $txt текст из массива $arr
foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};
 
//Осуществляется отправка данных в переменной $sendToTelegram
$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
 
//Если сообщение отправлено, напишет "Thank you", если нет - "Error"
if ($sendToTelegram) {
  echo "Thank you";
} else {
  echo "Error";
}
?>