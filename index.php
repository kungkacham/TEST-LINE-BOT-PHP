<?php

$access_token = 'QkERSr95E8xPvTP40mlaIZsY7hBwDKusWmPcp3jChPSxaUF/KNcs8RaVJiThluW6fAHh8jE4vnvsKiHxNnggvcbOtmYk0WHE4FgeNIavK/7F9ypKAHliyjFoK/xlhDHlpy5DJy5rUCKiGgQOVdGbYgdB04t89/1O/w1cDnyilFU=';
// userid = Ua132ce2b9afeaa52b171291470a85697
// Channel Secret = 21cd081db2eb84679640ba07b553235c
// Channel ID = 1488022463
// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
	// Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
	
	if ($event['type'] == 'message' && $event['message']['type'] == 'sticker') {

			// Get replyToken
			$replyToken = $event['replyToken'];
					
			//$sticker = array(
			//'type' => 'sticker',
			//'STKID' => '100',
			//'STKPKGID' => '1',
			//'STKVER' => '100'
			//);
					
			$sticker = array([
			‘type’ => ‘sticker’,
			‘packageId’ => ‘4’,
			‘stickerId’ => ‘300’
			]);
			
			//$sticker = array(
			//‘type’ => ‘sticker’,
			//‘packageId’ => ‘4’,
			//‘stickerId’ => ‘300’
			//);
			
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$packet = [
				'replyToken' => $replyToken,
				'messages' => array([$sticker]),
			];
			
			$post = json_encode($packet);
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