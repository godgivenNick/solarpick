<?php
// ini_set('display_errors','1');
// ini_set('display_startup_errors','1');
// ini_set('error_reporting', E_ALL);

$redirect = "http://sgholding.ru/solarpick/";

// $deniska = "godgiven.nick@gmail.com";
$deniska = "alexeykonoplev2@yandex.ru, denis-sultanoff16@yandex.ru, alexeysmartcopters@yandex.ru";

$to = "";
$from = "https://sgholding.ru/solarpick/";
$data = [];
$type = 0;
$name = '';
$email = '';
$phone = '';
$send = true;
// $good = '';


$customer_name = isset($_POST['name']) ? $_POST['name'] : '';
$customer_phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$customer_message = isset($_POST['comment']) ? $_POST['comment'] : '';
$customer_email = isset($_POST['email']) ? $_POST['email'] : '';
$item_id = isset($_POST['articul']) ? $_POST['articul'] : 0;

$customer_comment = isset($_POST['model-name']) ? $_POST['model-name'] : 0;
$item_cost = isset($_POST['model-price']) ? $_POST['model-price'] : 0;

$callback = isset($_POST['callback']) ? $_POST['callback'] : '';  /* для понимания откуда идет обратный звонок */

//4sales
$fromurl = isset($_POST['fromurl']) ? $_POST['fromurl'] : 0;
$roistat_id = isset($_POST['roistat_id']) ? $_POST['roistat_id'] : 0;

$apiSecret = 'yp3tNiB0o9EIgUGJ';
$fsc_send = curl_init();
curl_setopt_array($fsc_send, array(
        CURLOPT_URL => 'https://4salescrm.ru/api/order/save',//куда
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_FORBID_REUSE => true,
        CURLOPT_POSTFIELDS => http_build_query(
            array('apiSecret' => $apiSecret,
                'phoneNumber' => $customer_phone,
                'yourName' => $customer_name,
                'itemid' => $item_id,
                'itemcost' => $item_cost,
                'fromReq' => $_SERVER["REQUEST_URI"],
                'fromurl' => $fromurl,
                'roistat_id' => $roistat_id,
                'type' => 0
                    ))
));
$response = curl_exec($fsc_send);
curl_close($fsc_send);
//4sales

function debug($msg){
   echo '<div><pre> - '.print_r($msg,true).'</pre></div>';
}

$roistat = isset($_COOKIE['roistat_visit']) ? $_COOKIE['roistat_visit'] : null;


/* форма из Popup-menu */
if($callback == 'menu-popup'){

 // Отправка визита в ритейл через проксирование
 $roistatData = array(
   'roistat' => $roistat,
   'key' => 'ODgwMjoyMDQ5ODozOGJjNTkwOGY2NzY0OGRmMmM0YzE4NjNjNzdiMmEwZg==',
   'title' => 'Запрос на телефонную консультацию по беспроводным наушникам',
   'name' => $customer_name,
   'phone' => $customer_phone,
   'is_need_callback' => '0',
   'fields' => array (
     'site' => "copterdrone",
     'customerComment' => 'Обратный звонок. Запрос на консультацию по солнечному пауэрбанку SolarPick с сайта https://sgholding.ru/solarpick/ от: ' . $customer_name ,
     'site_source' => 'sgholding',
     'item_url' => $_SERVER["HTTP_REFERER"],
     'items' => array(
       array (
         'productId' => $item_id,
         'initialPrice' => $item_cost
       )
     )
   )
 );

/* Дубль на почту */
$previous_page = $_SERVER["HTTP_REFERER"];
$mail_to = $deniska;
$mail_from = "spbscooter.copterdrone.ru" . "\n";
$mail_body = "Обратный звонок. Запрос на консультацию по солнечному пауэрбанку SolarPick с сайта https://sgholding.ru/solarpick/ от: " . "\n" .
 "Имя клиента: " . $customer_name . "\n" .
 "Телефон клиента: " . $customer_phone . "\n" ;
}




/* catalog купить в 1 клик */

elseif($callback == 'popup-buy-one-click') {

 /* Отправка визита в ритейл через проксирование */
 $roistatData = array(
   'roistat' => $roistat,
   'key' => 'ODgwMjoyMDQ5ODozOGJjNTkwOGY2NzY0OGRmMmM0YzE4NjNjNzdiMmEwZg==',
   'title' => $customer_comment,
   'name' => $customer_name,
   'phone' => $customer_phone,
   'is_need_callback' => '0',
   'fields' => array (
     'site' => "copterdrone",
     'customerComment' => 'Заказ ( солнечный пауэрбанк SolarPick ) с сайта https://sgholding.ru/solarpick/ от: ' . $customer_name . "\n" . 'Телефон клиента: ' . $customer_phone . "\n" . 'Выбранная модель: ' . $customer_comment . "\n" . 'Цена с учетом скидки: ' . $item_cost,
     'site_source' => 'sgholding',
     'item_url' => $_SERVER["HTTP_REFERER"],
     'items' => array(
       array (
         'productId' => $item_id,
         'initialPrice' => $item_cost
       )
     )
   )
 );

/* Дубль на почту */
$previous_page = $_SERVER["HTTP_REFERER"];
$mail_to = $deniska;
$mail_from = "spbscooter.copterdrone.ru" . "\n";
$mail_body = "Заказ ( солнечный пауэрбанк SolarPick ) с сайта https://sgholding.ru/solarpick/ от: " . "\n" .
 "Имя клиента: " . $customer_name . "\n" .
 "Телефон клиента: " . $customer_phone . "\n" .
 "Выбранная модель: " . $customer_comment . "\n" .
 "Цена с учетом скидки: " . $item_cost . "\n" ;
}




/* форма из footer */
if($callback == 'middle_form'){

 // Отправка визита в ритейл через проксирование
 $roistatData = array(
   'roistat' => $roistat,
   'key' => 'ODgwMjoyMDQ5ODozOGJjNTkwOGY2NzY0OGRmMmM0YzE4NjNjNzdiMmEwZg==',
   'title' => 'Запрос на телефонную консультацию по беспроводным наушникам',
   'name' => $customer_name,
   'phone' => $customer_phone,
   'is_need_callback' => '0',
   'fields' => array (
     'site' => "copterdrone",
     'customerComment' => 'Обратный звонок. Запрос на консультацию по солнечному пауэрбанку SolarPick с сайта https://sgholding.ru/solarpick/: ' . $customer_phone ,
     'site_source' => 'sgholding',
     'item_url' => $_SERVER["HTTP_REFERER"],
     'items' => array(
       array (
         'productId' => $item_id,
         'initialPrice' => $item_cost
       )
     )
   )
 );

/* Дубль на почту */
$previous_page = $_SERVER["HTTP_REFERER"];
$mail_to = $deniska;
$mail_from = "spbscooter.copterdrone.ru" . "\n";
$mail_body = "Обратный звонок. Запрос на консультацию по солнечному пауэрбанку SolarPick с сайта https://sgholding.ru/solarpick/: " . "\n" .
 // "Имя клиента: " . $customer_name . "\n" .
 "Телефон клиента: " . $customer_phone . "\n" ;
}

















/* форма из footer */
if($callback == 'contacts_form'){

 // Отправка визита в ритейл через проксирование
 $roistatData = array(
   'roistat' => $roistat,
   'key' => 'ODgwMjoyMDQ5ODozOGJjNTkwOGY2NzY0OGRmMmM0YzE4NjNjNzdiMmEwZg==',
   'title' => 'Запрос на телефонную консультацию по беспроводным наушникам',
   'name' => $customer_name,
   'phone' => $customer_phone,
   'is_need_callback' => '0',
   'fields' => array (
     'site' => "copterdrone",
     'customerComment' => 'Обратный звонок. Запрос на консультацию по солнечному пауэрбанку SolarPick с сайта https://sgholding.ru/solarpick/: ' . $customer_phone ,
     'site_source' => 'sgholding',
     'item_url' => $_SERVER["HTTP_REFERER"],
     'items' => array(
       array (
         'productId' => $item_id,
         'initialPrice' => $item_cost
       )
     )
   )
 );

/* Дубль на почту */
$previous_page = $_SERVER["HTTP_REFERER"];
$mail_to = $deniska;
$mail_from = "spbscooter.copterdrone.ru" . "\n";
$mail_body = "Обратный звонок. Запрос на консультацию по солнечному пауэрбанку SolarPick с сайта https://sgholding.ru/solarpick/: " . "\n" .
 // "Имя клиента: " . $customer_name . "\n" .
 "Телефон клиента: " . $customer_phone . "\n" ;
}





/* форма из footer */
if($callback == 'quiz'){

 // Отправка визита в ритейл через проксирование
 $roistatData = array(
   'roistat' => $roistat,
   'key' => 'ODgwMjoyMDQ5ODozOGJjNTkwOGY2NzY0OGRmMmM0YzE4NjNjNzdiMmEwZg==',
   'title' => 'Запрос на телефонную консультацию по беспроводным наушникам',
   'name' => $customer_name,
   'phone' => $customer_phone,
   'is_need_callback' => '0',
   'fields' => array (
     'site' => "copterdrone",
     'customerComment' => 'Заявка с опросника. Обработку заявки следует начинать со скрипта, который шеф-junior вам передаст. Сайт - https://sgholding.ru/solarpick/: ' . $customer_phone ,
     'site_source' => 'sgholding',
     'item_url' => $_SERVER["HTTP_REFERER"],
     'items' => array(
       array (
         'productId' => $item_id,
         'initialPrice' => $item_cost
       )
     )
   )
 );

/* Дубль на почту */
$previous_page = $_SERVER["HTTP_REFERER"];
$mail_to = $deniska;
$mail_from = "spbscooter.copterdrone.ru" . "\n";
$mail_body = "Заявка с опросника. Обработку заявки следует начинать со скрипта, который шеф-junior вам передаст. Сайт - https://sgholding.ru/solarpick/: " . "\n" .
 // "Имя клиента: " . $customer_name . "\n" .
 "Телефон клиента: " . $customer_phone . "\n" ;
}





 file_get_contents("https://cloud.roistat.com/api/proxy/1.0/leads/add?" . http_build_query($roistatData));


 $result = mail ($mail_to, $mail_from, $mail_body);
