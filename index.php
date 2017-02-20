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
			//if($text == 'ก้อง' || $text == 'ชาติ'|| $text == 'อั้ม'|| $text == 'ลุง'){
			//	$messages = [
			//	'type' => 'text',
			//	'text' => กาก
			//];}
			
			if($text == 'v' || $text == 'v ' || $text == 'V' || $text == 'V ' || $text == 'view' || $text == 'view ' || $text == 'View' || $text == 'View ' || $text == '.'){
				$messages = [
				'type' => 'text',
				'text' => viewlastseen
			];}
			
			if($text == 's' || $text == 's ' || $text == 'S' || $text == 'S ' || $text == 'set' || $text == 'set ' || $text == 'Set' || $text == 'Set ' || $text == '..'){
				$messages = [
				'type' => 'text',
				'text' => setlastpoint
			];}		
			
			if(strstr($text,'have seen at the lastseen point')){
				$messages = [
				'type' => 'text',
				'text' => setlastpoint
			];}
			
			$array = array('Hi', 'Hello', 'สวัสดีประเทศไทย', 'พักแป๊ป', 'พักแพร๊บ', 'จ๊ะเอ๋', 'สวัสดี', 'สวัสดีครับ', 'สวัสดีค่ะ', 'สวัสดีจ้า', 'สวีดัส สวัสดี', 'สวัสดีจ๊ะ', 'กาก', 'มะกรูด', 'แอแฮร่', 'มาคุยกัน', 'ออกมานะ', 'จับได้แล้ว', 'มีแป้นพิมพ์ไหม', 'คุยได้ไม่กัด แต่จะกัด ถ้าไม่คุย');
			$output = $array[array_rand($array,1)];
		
			if(strstr($text,'Set the lastseens')){
				$messages = [
				'type' => 'text',
				'text' => $output
			];}
			
			if($text == '...'){
				$messages = [
				'type' => 'text',
				'text' => จุดจุดจุด
			];}		
			
			$rawomg = "กฎในการเทสก่อนเข้าแคลน (ปรับปรุง 02/11/59) \n 1";
			
			if($text == '....'){
				$messages = [
				'type' => 'text',
				'text' => $rawomg
			];}
			
			//if(strstr($text,'Set the lastseens')){
			//	$messages = [
			//	'type' => 'sticker',
			//	'STKID' => '100',
			//	'STKPKGID' => '1',
			//	'STKVER' => '100'
			//];}
			
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