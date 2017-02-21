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
			
			$array = array('Hi', 'Hello', 'สวัสดีประเทศไทย', 'พักแป๊ป', 'พักแพร๊บ', 'จ๊ะเอ๋', 'สวัสดี', 'สวัสดีครับ', 'สวัสดีค่ะ', 'สวัสดีจ้า', 'สวีดัส สวัสดี', 'สวัสดีจ๊ะ', 'กาก', 'มะกรูด', 'แอแฮร่', 'มาคุยกัน', 'ออกมานะ', 'จับได้แล้ว', 'มีแป้นพิมพ์ไหม', 'คุยได้ไม่กัด แต่จะกัด ถ้าไม่คุย', 'คนพิมพ์น่ารัก', 'คนอ่านน่ารัก', 'ที่นี่ที่ไหน', 'กลุ่มหรือป่าช้า', 'ขอพักบ้างนะ อย่าใช้งานเยอะ', 'สนุกมากไหม มาลองทำเองดูสิ');
			$output = $array[array_rand($array,1)];
		
			if(strstr($text,'Set the lastseens')){
				$messages = [
				'type' => 'text',
				'text' => $output
			];}
			
			if(strstr($text,'บอทกาก')){
			$messages = [
				'type' => 'text',
				'text' => ใครกันแน่ที่กาก
			];}
			
			$arrayyyy = array('ใครกันแน่ที่กาก', 'มั่นใจว่ากาก', 'กากแล้วทำไม', 'พ่อแม่ไม่รักสินะ ถึงว่าคนอื่น', 'กาก แล้วไง', 'มีปัญหาป่ะ', 'กาก ก๊าก กาก', 'กากจริง ๆ', 'เดินไปส่องกระจกสิ จะเจอกากกว่า', 'กาก', 'กอ อา กอ กาก', 'ขอบคุณ');
			$outputttt = $arrayyyy[array_rand($arrayyyy,1)];
			
			if(strstr($text,'กาก')){
			$messages = [
				'type' => 'text',
				'text' => $outputttt
			];}
			
			if($text == '...'){
				$messages = [
				'type' => 'text',
				'text' => จุดจุดจุด
			];}		
			
			if(strstr($text,'กลุ่มอะไร')){
				$messages = [
				'type' => 'text',
				'text' => กลุ่มส่งใบโคลเวอร์เกมเศรษฐีครับ
			];}	
				
			if(strstr($text,'ห้องอะไร')){
				$messages = [
				'type' => 'text',
				'text' => ห้องส่งใบโคลเวอร์เกมเศรษฐีครับ
			];}	
			
			$arrayy = array('สวัสดีครับ', 'สวัสดีค่ะ', 'ดีครับ', 'ดีค่ะ', 'ดีคับ', 'หวัดดีคับ', 'หวัดดีครับ', 'หวัดดีค่ะ');
			$outputt = $arrayy[array_rand($arrayy,1)];
		
			if($text == 'สวัสดี' || $text == 'สวัสดีครับ' || $text == 'ดีครับ' || $text == 'ดีคับ' || $text == 'สวัสดีค่ะ' || $text == 'ดีค่ะ' || $text == 'หวัดดีคับ' || $text == 'หวัดดีครับ' || $text == 'หวัดดีค่ะ'){
				$messages = [
				'type' => 'text',
				'text' => $outputt
			];}		
			
			$arrayyy = array('ฝันดีครับ', 'ฝันดีค่ะ', 'นอนหลับฝันดีนะ', 'Sweet dreams.', 'Good Night', 'GN', 'ฝันดีผีกัดตูด', 'ราตรีสวัสดิ์', 'นอนหลับฝันดี ฝันถึงเราด้วยนะ');
			$outputtt = $arrayyy[array_rand($arrayyy,1)];
		
			if($text == 'ฝันดี' || $text == 'ง่วงล่ะ' || $text == 'ง่วงแล้ว' || $text == 'นอนกันเถอะ' || $text == 'นอนก่อนนะ' || $text == 'ขอตัวนอนก่อนนะ' || $text == 'ขอตัวนอนก่อน' || $text == 'นอนกันดีกว่า' || $text == 'นอนดีกว่า' || $text == 'พรุ่งนี้ตื่นเช้า' || $text == 'ฝันดีครับ' || $text == 'ฝันดีคับ' || $text == 'ฝันดีค่ะ' || $text == 'นอนหลับฝันดี' || $text == 'นอนแล้วนะ' || $text == 'นอนดีกว่า' || $text == 'นอนก่อนนะ' || $text == 'ขอตัวนอนก่อนนะ' || $text == 'ฝันดีทุกคน' || $text == 'ฝันดี ทุกคน' || $text == 'นอนแล้วครับ' || $text == 'นอนแล้วคับ'){
				$messages = [
				'type' => 'text',
				'text' => $outputtt
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