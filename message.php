<?php header('Content-type: text/html; charset=utf-8');?>

<?php 

setlocale(LC_ALL, "russian");
$monthes = array(
    1 => 'Января', 2 => 'Февраля', 3 => 'Марта', 4 => 'Апреля',
    5 => 'Мая', 6 => 'Июня', 7 => 'Июля', 8 => 'Августа',
    9 => 'Сентября', 10 => 'Октября', 11 => 'Ноября', 12 => 'Декабря'
);

$data = (date('d ') . $monthes[(date('n'))] . date(' Y, H:i:s'));

$body  = $data;

if($_POST['name']){
    $body .= "<br> Имя: ".trim(strip_tags($_POST['name'])) ;
}

if($_POST['email']){
    $body .= "<br> Почта: ".trim(strip_tags($_POST['email'])) ;
}

if($_POST['phone']){
    $body .= "<br> Телефон: ".trim(strip_tags($_POST['phone'])) ;
}

if($_POST['text']){
    $body .= "<br> текст: ".trim(strip_tags($_POST['text'])) ;
}

if($_POST['fromform']){
    $body .= "<br> Имя: ".trim(strip_tags($_POST['fromform'])) ;
}


$files2load = count($_FILES['image_file']['type']);

if ($files2load > 0) {

    for ($i = 0; $i < $files2load; $i++) {
        if ($_FILES['image_file']['type'][$i]) {
            if (!file_exists("zakaz")) {
                mkdir("zakaz", 0777);
                chmod("zakaz", 0777);
            }
            if (!file_exists("zakaz/$phone")) {
                mkdir("zakaz/$phone", 0777);
                chmod("zakaz/$phone", 0777);
            }
            if (is_uploaded_file($_FILES['image_file']['tmp_name'][$i])) {
                $saved = "zakaz/$phone/" . $_FILES['image_file']['name'][$i];
                if (!move_uploaded_file($_FILES['image_file']['tmp_name'][$i], $saved)) {
                    unlink($_FILES['image_file']['tmp_name'][$i]);
                    $body .= "<br>Ошибка при загрузке файла error" . $_FILES['image_file']['name'][$i];
                } else {
                    chmod($saved, 0644);
                    $body .= "<br>\n<img src=\"http://" . $_SERVER['SERVER_NAME'] . "$saved\">";
                }
            }
        }
    }
}
var_dump($files2load);

var_dump($_FILES['image_file']);


require_once($_SERVER['DOCUMENT_ROOT'] . '/phpmailer/PHPMailerAutoload.php'); //подключаем класс
$mail = new PHPMailer(); //вызываем класс

$mail->CharSet = 'utf-8';   //Устанавливаем кодировку
$mail->IsHTML(true);
$mail->SetLanguage('ru');   //для ошибок итд.
$mail->addAddress("phpner@gmail.com","phpner"); //куда отправлять список через ","
$mail->FromName = 'Мой сайт';
$mail->Subject = "Кто-то хочет что-то спросить";

$mail->Body = $body;

//отправка 
if(!$mail->Send()) {
    echo 'false ';
    echo $mail->ErrorInfo;
} else {
    echo true;
}
/*header( 'Refresh: 0; url=http://alp-spb.ru/' );*/
/*exit;*/
?>