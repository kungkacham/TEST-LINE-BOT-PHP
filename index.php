<?php
$access_token = 'QkERSr95E8xPvTP40mlaIZsY7hBwDKusWmPcp3jChPSxaUF/KNcs8RaVJiThluW6fAHh8jE4vnvsKiHxNnggvcbOtmYk0WHE4FgeNIavK/7F9ypKAHliyjFoK/xlhDHlpy5DJy5rUCKiGgQOVdGbYgdB04t89/1O/w1cDnyilFU=';

$channelId = "取得したアカウントのChannel ID";
$channelSecret = "取得したアカウントのChannel Secret";
$mid = "取得したアカウントのMID";
$param = preg_replace('/\/$/', '', $_SERVER['REQUEST_URI']);
$handle = fopen('php://input','r');
$inputJson = fgets($handle);
$json = json_decode($inputJson,true);
$resultJsonArray = $json["result"];
$resultJson = $resultJsonArray[0];
$content = $resultJson["content"];
$from = $content ['from'];
$sendMessage = $content ['text'];
$returnJsonContents = array ( 'to' => array($from),
    'toChannel' => '1383378250',
    'eventType' => '138311608800106203',
    'content' => array(
        'contentType' => 1,
        'toType' => 1,
        'text' => $sendMessage
    )
);
 
$headerString = 
    'Content-type:application/json; charser=UTF-8' . "\r\n"
    . 'X-Line-ChannelID:' . $channelId . "\r\n"
    . 'X-Line-ChannelSecret:' . $channelSecret . "\r\n"
    . 'X-Line-Trusted-User-With-ACL:' . $mid . "\r\n";
$url ='https://trialbot-api.line.me/v1/events';
 
$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => $headerString,
        'content' => json_encode($returnJsonContents)
    )
);
 
$context = stream_context_create($options);
file_get_contents( $url, false, $context );
exit;
echo "OK";