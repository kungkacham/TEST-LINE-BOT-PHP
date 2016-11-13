<?php
$access_token = 'QkERSr95E8xPvTP40mlaIZsY7hBwDKusWmPcp3jChPSxaUF/KNcs8RaVJiThluW6fAHh8jE4vnvsKiHxNnggvcbOtmYk0WHE4FgeNIavK/7F9ypKAHliyjFoK/xlhDHlpy5DJy5rUCKiGgQOVdGbYgdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$jsonObj = json_decode($json_string);
$to = $jsonObj->{"result"}[0]->{"content"}->{"from"};
$text = $jsonObj->{"result"}[0]->{"content"}->{"text"};
$text_ex = explode(':', $text);
$response_format_text = ['contentType'=>1,"toType"=>1,"text"=>$result_text];
if($text_ex[0] == "ก้อง"){
$response_format_text = ['contentType'=>1,"toType"=>1,"text"=>"กาก"];
}
}
echo "OK";