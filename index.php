<?php
$access_token = 'QkERSr95E8xPvTP40mlaIZsY7hBwDKusWmPcp3jChPSxaUF/KNcs8RaVJiThluW6fAHh8jE4vnvsKiHxNnggvcbOtmYk0WHE4FgeNIavK/7F9ypKAHliyjFoK/xlhDHlpy5DJy5rUCKiGgQOVdGbYgdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			// Get text sent
			$text = $event['message']['text'];
			// Get replyToken
			$replyToken = $event['replyToken'];

			// Build message to reply back
			if($text == 'ก้อง' || $text == 'ชาติ'|| $text == 'อั้ม'|| $text == 'ลุง'){
				$messages = [
				'type' => 'text',
				'text' => กาก
			];}
			
			if($text == 'บอส'){
				$messages = [
				'type' => 'text',
				'text' => โคตรกาก
			];}
			
			if($text == 'พี่หน่อง'){
				$messages = [
				'type' => 'text',
				'text' => เจ้านายผม
			];}
			
			if($text == 'หน่อง'){
				$messages = [
				'type' => 'text',
				'text' => เจ้านายผม
			];}
			
			if($text == 'ก่ายก้อง'){
				$messages = [
				'type' => 'text',
				'text' => กากมากกกกก
			];}
			
			if($text == 'พี่บอย'){
				$messages = [
				'type' => 'text',
				'text' => แฟนก้อง ห้ามยุ่ง
			];}
			
			if($text == 'บอย'){
				$messages = [
				'type' => 'text',
				'text' => "ผัวก้อง ห้ามยุ่งนะ"
			];}
			
			if($text == 'ฝันดี'){
				$messages = [
				'type' => 'text',
				'text' => ฝันดีเช่นกันนะจ๊ะ
			];}
			
			if($text == 'ฝันดีนะ'){
				$messages = [
				'type' => 'text',
				'text' => ฝันดีจ๊ะ
			];}
			
			if($text == 'อีน็อต'){
				$messages = [
				'type' => 'text',
				'text' => พูดมาก
			];}
			
			if($text == 'นอนเถอะ'){
				$messages = [
				'type' => 'text',
				'text' => "ช่ายควรนอนได้แล้ว จะได้ไม่เป็นภาระของดวงตา"
			];}
			
			//else{$messages = [
			//	'type' => 'text',
			//	'text' => $text}

			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$data = [
				'replyToken' => $replyToken,
				'messages' => [$messages],
			];
			$post = json_encode($data);
			$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			$result = curl_exec($ch);
			curl_close($ch);

			echo $result . "\r\n";
		}
	}
}
echo "OK";