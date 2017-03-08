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
				sleep(3);
				$messages = [
				'type' => 'text',
				'text' => setlastpoint
			];}
			
			$array = array("\n\t\nHi", "\n\t\nHello", "\n\t\nสวัสดีประเทศไทย", "\n\t\nพักแป๊ป", "\n\t\nพักแพร๊บ", "\n\t\nจ๊ะเอ๋", "\n\t\nสวัสดี", "\n\t\nสวัสดีครับ", "\n\t\nสวัสดีค่ะ", "\n\t\nสวัสดีจ้า", "\n\t\nสวีดัส สวัสดี", "\n\t\nสวัสดีจ๊ะ", "\n\t\nกาก", "\n\t\nมะกรูด", "\n\t\nแอแฮร่", "\n\t\nมาคุยกัน", "\n\t\nออกมานะ", "\n\t\nจับได้แล้ว", "\n\t\nมีแป้นพิมพ์ไหม", "\n\t\nคุยได้ไม่กัด แต่จะกัด ถ้าไม่คุย", "\n\t\nคนพิมพ์น่ารัก", "\n\t\nคนอ่านน่ารัก", "\n\t\nที่นี่ที่ไหน", "\n\t\nกลุ่มหรือป่าช้า", "\n\t\nขอพักบ้างนะ อย่าใช้งานเยอะ", "\n\t\nสนุกมากไหม มาลองทำเองดูสิ");
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
			
			$arrayyyy = array('เรียนมาน้อยสินะ เลยพิมพ์ได้แค่คำว่า กาก', 'ปมด้อยสินะ ถึงว่าคนอื่นกาก', 'ว่าคนอื่นกาก ก็กากเหมือนกันแหละว้า', 'กาก กาก กาก กาก กาก กาก กาก กาก กาก พอใจม่ะ', 'อย่าหาว่าสอนเลยนะ คำว่า กาก เค้าไว้ใช้เรียกคุณนั่นแหละ', 'ไม่ได้ไปกากบนหัวคุณสักหน่อย', 'พิมพ์คำอื่นไม่เป็นหรือไง', 'กากแล้วไง ไปยุ่งกับเค้าทำไม', 'ใครกันแน่ที่กาก', 'มั่นใจว่ากาก', 'กากแล้วทำไม', 'พ่อแม่ไม่รักสินะ ถึงว่าคนอื่น', 'กาก แล้วไง', 'มีปัญหาป่ะ', 'กาก ก๊าก กาก', 'กากจริง ๆ', 'เดินไปส่องกระจกสิ จะเจอกากกว่า', 'กาก', 'กอ อา กอ กาก', 'ขอบคุณ');
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
		
			if($text == 'ราตรีสวัสดิ์' || $text == 'ฝันดี' || $text == 'ง่วงล่ะ' || $text == 'ง่วงแล้ว' || $text == 'นอนกันเถอะ' || $text == 'นอนก่อนนะ' || $text == 'ขอตัวนอนก่อนนะ' || $text == 'ขอตัวนอนก่อน' || $text == 'นอนกันดีกว่า' || $text == 'นอนดีกว่า' || $text == 'พรุ่งนี้ตื่นเช้า' || $text == 'ฝันดีครับ' || $text == 'ฝันดีคับ' || $text == 'ฝันดีค่ะ' || $text == 'นอนหลับฝันดี' || $text == 'นอนแล้วนะ' || $text == 'นอนดีกว่า' || $text == 'นอนก่อนนะ' || $text == 'ขอตัวนอนก่อนนะ' || $text == 'ฝันดีทุกคน' || $text == 'ฝันดี ทุกคน' || $text == 'นอนแล้วครับ' || $text == 'นอนแล้วคับ'){
				$messages = [
				'type' => 'text',
				'text' => $outputtt
			];}	
			
			if(strstr($text,'ฝันดี')){
				$messages = [
				'type' => 'text',
				'text' => ฝันดี
			];}
			
			if(strstr($text,'ดีคับ')){
				$messages = [
				'type' => 'text',
				'text' => สวัสดีครับ
			];}
					
			if(strstr($text,'ดีครับ')){
				$messages = [
				'type' => 'text',
				'text' => สวัสดีครับ
			];}
			
			if(strstr($text,'ดีค่ะ')){
				$messages = [
				'type' => 'text',
				'text' => สวัสดีค่ะ
			];}
			
			if($text == 'NaN'){
				$messages = [
				'type' => 'text',
				'text' => ".\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\t\n\n\t\n\t\n\t\n\t\n\t\n."
			];}	
				
			if($text == 'RUN'){
				$messages = [
				'type' => 'text',
				'text' => "09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.09.0"
			];}	

			if(strstr($text,'กฎเทส')){
				$messages = [
				'type' => 'text',
				'text' => "กฎในการทดสอบก่อนเข้าแคลน (ปรับปรุง 08/03/60) \n\t\n 1. ไม่อยู่ในสังกัดของแคลนใด ๆ ขณะทำการทดสอบ หากทราบจะทำการแบนทันที \n\t\n 2. จะต้องมีการ์ดตัวละคร S+ LV. 30 คุมเต๋า 83 ขึ้นไป และมีจี้ที่จำเป็นสำหรับสายวิคเตอรี่และสายล้มละลาย เทียบเท่า S+ LV. 7 ขึ้นไป พร้อมความสามารถพิเศษของจี้เครื่องราง S+ ที่เหมาะสม (อาจมีการเปลี่ยนแปลงตามความเหมาะสม ขึ้นอยู่กับผู้ทำทดสอบ) ถ้าจี้ S+ LV. 7 ยังไม่ครบ 4 ชิ้นขึ้นไป จะยังไม่ส่งลงแข่งในรายการต่าง ๆ \n\t\n 3. จะทำการทดสอบด้วยแผนที่ 'ประเทศไทย' 2 ครั้ง  โดยจะเป็นการทดสอบแบบเดี่ยว 1 ครั้ง และแบบทีม 1 ครั้ง ต้องชนะอย่างน้อย 1 ครั้ง จึงจะสามารถผ่านเข้าแคลนได้ อนุโลมได้ถ้าผู้ทำการทดสอบเห็นว่ามีศักยภาพมากพอในการเข้าร่วมกับแคลนได้ \n\t\n * การทดสอบแบบทีมให้ผู้ที่มาขอเข้าทดสอบเล่นคู่กับผู้ทำการทดสอบ แล้วไปสุ่มหาคู่แข่งในห้อง 10 M \n * การทดสอบอาจมีการเปลี่ยนแปลงตามความเหมาะสม ขึ้นอยู่กับผู้ทำการทดสอบ \n\t\n 4. หากทดสอบแล้ว 'ผ่าน' ให้ผู้มาขอเข้าทดสอบเปลี่ยนชื่อในไลน์เป็น (OMG)-ชื่อ-ตัวเลข ส่วนในเกมให้เปลี่ยนเป็น (OMG)-ตัวเลข เช่น ชื่อในไลน์เป็น (OMG)-ABC-00 ในเกมส์จะเป็น (OMG)-00 ชื่อในเกมสามารถเปลี่ยนทีหลังได้ หากไม่มีเพชรเปลี่ยน แต่ต้องเปลี่ยนภายใน 24 ชม. หลังจากทราบว่า 'ผ่าน' แล้ว  \n\t\n *ตัวเลขที่ต้องใส่ผู้ทำการทดสอบจะเป็นคนแจ้งให้ทราบ \n\t\n 5. เมื่อดึงเข้าแคลนแล้ว ให้แนะนำตัว (ชื่อ อายุ) และอ่านโน๊ตทุกโน๊ตที่ถูกโพสต์ในหน้าโน๊ตของห้องแคลน \n\t\n 6. ต้องมีเวลาว่างช่วงเวลา 17.00 - 22.30 น. ตรงต่อเวลา และเข้ามาคุยในแคลนเป็นประจำ \n\t\n 7. ปฏิบัติตามกฎของแคลนได้ทุกข้อ สามารถอ่านได้ที่โน๊ตของกลุ่ม \n\t\n *** ไม่สะดวกข้อไหนกรุณาแจ้งล่วงหน้า มิฉะนั้นหากเข้าแคลนแล้ว อาจโดนให้ออกจากแคลน โดยไม่แจ้งให้ทราบล่วงหน้า \n"
			];}
			
			if(strstr($text,'กฎแคลน')){
				$messages = [
				'type' => 'text',
				'text' => "กฎระเบียบแคลน (ปรับปรุง 08/03/60) \n\t\n 1. เคารพการตัดสินใจของ LD Co-LD Elder REF และ SPV ทุกกรณี \n\t\n 2. เคารพรุ่นพี่ให้เกียรติรุ่นน้อง พูดคุยกันได้ทุกเรื่อง ไม่จำเป็นต้องเป็นเรื่องเกม งดถ้อยคำหยาบคาย ส่อลามกอานาจาร ส่อเสียด อวดอ้าง อวดเก่ง โชว์พาว ลามปามกับเพื่อนร่วมแคลน \n\t\n 3. ไม่ส่งรูปโป๊ (ติดเรทได้ แต่ห้ามโป๊เกินไป) \n\t\n 4. ห้ามส่งรูป สิ่งเสพติด ของมึนเมา รวมไปถึงการกล่าวถึงส่วนประกอบ ขั้นตอน หรือวิธีในการผลิต ที่ไม่ใช่ในแง่ของการศึกษาหรืออบรบสั่งสอน \n\t\n 5. ห้ามเข้าออกแคลนเอง โดยไม่แจ้ง LD Co-LD Elder REF หรือ SPV หากมีเหตุจำเป็น เช่น เปลี่ยนไอดี ขายไอดี แลกไอดี ให้แจ้ง LD Co-LD Elder REF หรือ SPV ก่อนทุกครั้ง หากออกไปโดยไม่มีเหตุผล จะไม่รับกลับเข้ามาอีกทุกกรณี \n\t\n 6. ห้ามสร้างความวุ่นวาย สร้างปัญหา ห้ามทะเลาะกันในแคลน หากมีอะไรไม่พอใจ ให้คุยส่วนตัวหรือแจ้ง LD Co-LD Elder REF หรือ SPV ทันที \n\t\n 7. มีเวลาให้แคลนช่วง 17.00 - 22.30 น. เพื่อซ้อมทีมหรือลงแข่งขันในรายการต่าง ๆ \n\t\n 8. ถ้าไม่จำเป็น ไม่ควรส่งอีโม (โดยเฉพาะแลบลิ้น) หรือจิ้มเมือง ในการเล่นทั่วไป \n\t\n 9. หากมีการแข่งรายการต่าง ๆ งดอีโมทุกชนิดและงดจิ้มเมืองทุกกรณี \n\t\n 10. หากมีการให้ลงชื่อในโน๊ต เพื่อตรวจสอบว่าสะดวกหรือไม่สะดวกลงแข่ง แล้ว 'ไม่ลงชื่อ' หรือลงชื่อแต่ 'ไม่ว่าง' ติดต่อกัน เกิน 3 ครั้ง จะพ้นสภาพการเป็นสมาชิกของแคลนทันที (หากมีเหตุจำเป็น จะพิจารณาอนุญาตให้เป็นกรณีไป) และหากมีรายชื่อลงแข่งไม่ว่ารายการใด ๆ แล้วไม่มาแข่ง หรือ ไม่มีการแจ้ง LD Co-LD Elder REF หรือ SPV ล่วงหน้า ก่อนเวลา 18.00 น. ของวันแข่ง จะพ้นสภาพการเป็นสมาชิกของแคลนทันที (หากมีเหตุจำเป็น จะพิจารณาอนุญาตให้เป็นกรณีไป) \n"
			];}
			
			if(strstr($text,'รูปแบบชื่อ')){
				$messages = [
				'type' => 'text',
				'text' => "รูปแบบชื่อ \n\t\n ในไลน์ (OMG)-ชื่อ-เลขที่ได้รับจากผู้ทำการทดสอบ \nในเกม (OMG)-เลขที่ได้รับจากผู้ทำการทดสอบ \n\t\n ตัวอย่าง \n\t\n (OMG)-Oh My God-999 => ชื่อในไลน์ \n(OMG)-999 => ชื่อในเกม* \n\t\n *ชื่อในเกม ไม่ต้องใช่ชื่อ ให้ใส่เฉพาะตัวเลขเท่านั้น \n"
			];}
			
			if(strstr($text,'เปลี่ยนชื่อตามนี้')){
				$messages = [
				'type' => 'text',
				'text' => "รูปแบบชื่อ \n\t\n ในไลน์ (OMG)-ชื่อ-เลขที่ได้รับจากผู้ทำการทดสอบ \nในเกม (OMG)-เลขที่ได้รับจากผู้ทำการทดสอบ \n\t\n ตัวอย่าง \n\t\n (OMG)-Oh My God-999 => ชื่อในไลน์ \n(OMG)-999 => ชื่อในเกม* \n\t\n *ชื่อในเกม ไม่ต้องใช่ชื่อ ให้ใส่เฉพาะตัวเลขเท่านั้น \n"
			];}
			
			if($text == 'ฟอร์มชื่อ'){
				$messages = [
				'type' => 'text',
				'text' => "ในไลน์ (OMG)-ชื่อ- \n ในเกม (OMG)-"
			];}
			
			if($text == 'ลิงค์ห้องเทส'){
				$messages = [
				'type' => 'text',
				'text' => "http://line.me/R/ti/g/D83VWOfn6l"
			];}
			
			if($text == 'ลิงค์ห้องเฟรนลี่'){
				$messages = [
				'type' => 'text',
				'text' => "http://line.me/R/ti/g/-yjVBttpYf"
			];}
			
			if($text == 'เปิดลิงค์'){
				$messages = [
				'type' => 'text',
				'text' => "!enableurl"
			];}
			
			if($text == 'ปิดลิงค์'){
				$messages = [
				'type' => 'text',
				'text' => "!preventurl"
			];}
			
			if(strstr($text,'หาแคลน')){
				$messages = [
				'type' => 'text',
				'text' => "[ขออนุญาตแอดมินครับ] \n\t\n (OMG) -Oh My God- CLAN \n\t\n เปิดรับสมัครนักแข่ง \n\t\n เพื่อลงแข่งขันในรายการต่าง ๆ \n\t\n คุณสมบัติของนักแข่ง \n 1. การ์ด S+ LV. 30 การควมคุมลูกเต๋า 83 ขี้นไป \n 2. จี้เครื่องราง S+ LV. 7 พร้อมความสามารถพิเศษของจี้เครื่องราง S+ ที่เหมาะสม ครบเซ็ต ทั้งสายวิคเตอรี่ และ สายล้มละลาย \n 3. มีเวลาให้แคลนช่วง 16.00 - 22.00 น. เพื่อลงแข่ง \n 4. มีประสบการณ์แข่ง สายแพลตินัม หรือ มาเป็นคู่ จะพิจารณาเป็นพิเศษ  \n 5. เคารพกฏของแคลน \n 6. ไม่จำกัดอายุ \n\t\n ท่านที่สนใจแอดไอดีไลน์มาได้ที่ \n ning.nhong ( http://line.me/ti/p/~ning.nhong ) \n\t\n แอดมาแล้ว อย่าลืมทักมานะครับ ^ ^ \n"
			];}
			
			if(strstr($text,'เข้าแคลน')){
				$messages = [
				'type' => 'text',
				'text' => "[ขออนุญาตแอดมินครับ] \n\t\n (OMG) -Oh My God- CLAN \n\t\n เปิดรับสมัครนักแข่ง \n\t\n เพื่อลงแข่งขันในรายการต่าง ๆ \n\t\n คุณสมบัติของนักแข่ง \n 1. การ์ด S+ LV. 30 การควมคุมลูกเต๋า 83 ขี้นไป \n 2. จี้เครื่องราง S+ LV. 7 พร้อมความสามารถพิเศษของจี้เครื่องราง S+ ที่เหมาะสม ครบเซ็ต ทั้งสายวิคเตอรี่ และ สายล้มละลาย \n 3. มีเวลาให้แคลนช่วง 16.00 - 22.00 น. เพื่อลงแข่ง \n 4. มีประสบการณ์แข่ง สายแพลตินัม หรือ มาเป็นคู่ จะพิจารณาเป็นพิเศษ  \n 5. เคารพกฏของแคลน \n 6. ไม่จำกัดอายุ \n\t\n ท่านที่สนใจแอดไอดีไลน์มาได้ที่ \n ning.nhong ( http://line.me/ti/p/~ning.nhong ) \n\t\n แอดมาแล้ว อย่าลืมทักมานะครับ ^ ^ \n"
			];}
			
			if(strstr($text,'อยากมีแคลน')){
				$messages = [
				'type' => 'text',
				'text' => "[ขออนุญาตแอดมินครับ] \n\t\n (OMG) -Oh My God- CLAN \n\t\n เปิดรับสมัครนักแข่ง \n\t\n เพื่อลงแข่งขันในรายการต่าง ๆ \n\t\n คุณสมบัติของนักแข่ง \n 1. การ์ด S+ LV. 30 การควมคุมลูกเต๋า 83 ขี้นไป \n 2. จี้เครื่องราง S+ LV. 7 พร้อมความสามารถพิเศษของจี้เครื่องราง S+ ที่เหมาะสม ครบเซ็ต ทั้งสายวิคเตอรี่ และ สายล้มละลาย \n 3. มีเวลาให้แคลนช่วง 16.00 - 22.00 น. เพื่อลงแข่ง \n 4. มีประสบการณ์แข่ง สายแพลตินัม หรือ มาเป็นคู่ จะพิจารณาเป็นพิเศษ  \n 5. เคารพกฏของแคลน \n 6. ไม่จำกัดอายุ \n\t\n ท่านที่สนใจแอดไอดีไลน์มาได้ที่ \n ning.nhong ( http://line.me/ti/p/~ning.nhong ) \n\t\n แอดมาแล้ว อย่าลืมทักมานะครับ ^ ^ \n"
			];}
			
			if(strstr($text,'มีแคลนไหนรับ')){
				$messages = [
				'type' => 'text',
				'text' => "[ขออนุญาตแอดมินครับ] \n\t\n (OMG) -Oh My God- CLAN \n\t\n เปิดรับสมัครนักแข่ง \n\t\n เพื่อลงแข่งขันในรายการต่าง ๆ \n\t\n คุณสมบัติของนักแข่ง \n 1. การ์ด S+ LV. 30 การควมคุมลูกเต๋า 83 ขี้นไป \n 2. จี้เครื่องราง S+ LV. 7 พร้อมความสามารถพิเศษของจี้เครื่องราง S+ ที่เหมาะสม ครบเซ็ต ทั้งสายวิคเตอรี่ และ สายล้มละลาย \n 3. มีเวลาให้แคลนช่วง 16.00 - 22.00 น. เพื่อลงแข่ง \n 4. มีประสบการณ์แข่ง สายแพลตินัม หรือ มาเป็นคู่ จะพิจารณาเป็นพิเศษ  \n 5. เคารพกฏของแคลน \n 6. ไม่จำกัดอายุ \n\t\n ท่านที่สนใจแอดไอดีไลน์มาได้ที่ \n ning.nhong ( http://line.me/ti/p/~ning.nhong ) \n\t\n แอดมาแล้ว อย่าลืมทักมานะครับ ^ ^ \n"
			];}
			
			if(strstr($text,'กฎห้องเฟรนลี่')){
			$messages = [
			'type' => 'text',
			'text' => "(OMG)-Friendly Room- \n\t\n กลุ่มนี้สร้างขึ้นเพื่อพูดคุย หารือ ปรึกษา หากระชับมิตร หาเพื่อนเล่น หาสมาชิกแคลน หรือแลกเปลี่ยนประสบการณ์ในกลุ่มผู้เล่นเกมเศรษฐี ดังนั้นไม่จำเป็นต้องพูดคุยแต่เฉพาะในเรื่องเกมเศรษฐีเท่านั้น สามารถพูดคุยได้ทุกเรื่อง ตราบเท่าที่ไม่ผิดกฎ กติกา มารยาท ในการอยู่ร่วมกันด้านล่างนี้ \n\t\n กฎ กติกา มารยาท ในการอยู่ร่วมกันในห้อง (OMG)-Friendly Room- \n\t\n 1. ห้ามพูดคุย ถกเถียง เกี่ยวกับสถาบัน ชาติ ศาสนา พระมหากษัตริย์ และการเมือง \n\t\n 2. กรุณางดส่งรูป หรือคลิปลามกอนาจาร รูปสิ่งเสพติดหรือของมึนเมาทุกชนิด รวมไปถึงข้อความลูกโซ่ เพจลูกโซ่ หรือข้อความหลอกลวงทุกชนิด \n\t\n 3. งดการพูดเชิงดูถูก เสียดสี ถากถาง เยาะเย้ย เหยียดหยาม ส่อเสียด เหน็บแนม ดูหมิ่น ลามปาม อวดอ้าง อวดเก่ง โชว์พาวเวอร์ หรือใช้ถ้อยคำหยาบคาย ต่อบุคคลอื่น \n\t\n 4. สำหรับบุคคลที่มีปัญหากันมา กรุณาไปทะเลาะกันส่วนตัว ห้ามมาทะเลาะเบาะแว้ง ก่อดราม่า ก่อความวุ่นวายในห้องนี้ \n\t\n 5. ห้ามเพิ่มหรือลบสมาชิกออกจากกลุ่ม ก่อนได้รับอนุญาต ถ้าไม่สามารถเพิ่มสมาชิกได้ให้ส่งข้อมูลผู้ติดต่อ (contact) ทิ้งไว้ แล้วผู้ดูแลห้องจะทำการดึงให้ในภายหลัง \n\t\n  หากมีการกระทำผิดดังกล่างข้างต้นหรือการกระทำผิดอื่นใดนอกเหนือจากที่ได้กล่าวไว้ให้อยู่ในดุลพินิจของผู้ดูแลห้องนี้ โดยการลงโทษจะมีตั้งแต่ตักเตือน เตะออกจากห้องไปสงบสติอารมณ์ หรือติดแบล็คลิสต์ ซึ่งขึ้นอยู่กับแต่ละสถานการณ์และดุลพินิจของผู้ดูแลห้อง \n\t\n Powered by (OMG) -Oh My God- CLAN \n"
			];}
			
			if($text == 'คำสั่งบอท'){
				$messages = [
				'type' => 'text',
				'text' => "คำสั่งที่ใช้ได้ภายในกลุ่ม しりちゃんv10 \n --- \n 設定:確認 ：ตรวจสอบการตั้งค่า \n --- \n 設定:招待拒否:オン ：ไม่อนุญาตการเชิญคนเข้ากลุ่ม \n 設定:招待拒否:オフ : อนุญาตการเชิญคนเข้ากลุ่ม \n 設定:グループ名ロック:オン ：ไม่อนุญาตให้เปลี่ยนชื่อกลุ่ม \n 設定:グループ名ロック:オフ ：อนุญาตให้เปลี่ยนชื่อกลุ่ม \n 設定:アイコンロック:オン ：ไม่อนุญาตให้เปลี่ยนรูปปกของกลุ่ม \n 設定:アイコンロック:オフ ：อนุญาตให้เปลี่ยนรูปปกของกลุ่ม \n 設定:らっこさん:オン ：เปิด Rakko v10 \n 設定:らっこさん:オフ ：ปิด Rakko v10 \n 設定:スタンプ規制:オン ：เปิดห้ามส่งสติ๊กเกอร์ติดต่อกัน 15 สติ๊กเกอร์ ใน 1 นาที \n 設定:スタンプ規制オフ ：ปิดห้ามส่งสติ๊กเกอร์ติดต่อกัน 15 สติ๊กเกอร์ ใน 1 นาที \n --- \n 設定:作成者ロック:オン ：ไม่อนุญาตให้ลบผู้ดูแลหลัก \n 設定:作成者ロック:オフ ：อนุญาตให้ลบผู้ดูแลหลัก \n 設定:グル作者変更 ：เปลี่ยนผู้ดูแลหลัก \n 設定:作者交換 ：ให้ผู้ดูแลสำรองมาเป็นผู้ดูแลหลัก \n 設定:予備作者変更 ：เปลี่ยนผู้ดูแลสำรอง \n 設定:予備作者削除 ：ลบผู้แลสำรอง \n --- \n 設定:ホワイト追加 ：เพิ่มบัญชีขาว \n 設定:ブラック追加 ：เพิ่มบัญชีดำ \n 設定:リスト削除 ：ลบจากบัญชีดำและบัญชีขาว \n 設定:独自リスト削除 ：ล้างบัญชีดำและบัญชีขาว \n 設定:独自リストコピー ：คัดลอกบัญชีดำและบัญชีขาวไปใช้กับกลุ่มตัวเอง \n 設定:独自リスト共有 ：นำบัญชีขาวและบัญชีดำไปใช้กับกลุ่มของคนอื่น \n 設定:リスト確認 ：ยืนยันการนำไปใช้ \n --- \n コピー ：สำเนา \n 上書き ：แทนที่ \n --- \n Siri:グル作成者 ：ผู้ดูแลหลัก \n Siri:予備作成者 ：ผู้ดูแลสำรอง \n --- \n Siri:バックアップ ：สำรองข้อมูล \n Siri:ログイン ：ดูข้อมูลที่สำรองไว้ เพื่อเรียกคืน \n --- \n Siri:オフ  ：ปิดการโต้ตอบ \n Siri:オン  ：เปิดการโต้ตอบ คำที่จะโต้ตอบ เช่น おはよう   眠い \n --- \n 既読ポイント設定  ：ตั้งค่าเริ่มบันทึกคนอ่าน \n 既読確認 ：ดูคนอ่านนับจากที่ตั้งค่าเริ่มบันทึกไว้ \n --- \n Siri:招待キャンセル：ยกเลิกการเชิญเข้ากลุ่มที่ค้างอยู่ ส่ง 2 ครั้ง \n --- \n Siri:招待URL拒否 : ไม่อนุญาตการเชิญโดยใช้ URL \n Siri:招待URL生成 : อนุญาตการเชิญโดยใช้ URL \n --- \n Siri:招待回数 : ดูจำนวนตั๋วเชิญที่เหลือ \n Siri:追加アカウント購入：ซื้อบัญชีเสริมเพิ่ม \n Siri:隠しコマンド : คำสั่งที่ซ่อนอยู่ \n --- \n Siri:絵の作者：บัญชีผู้เขียน Siri \n Siri:作者 : ข้อมูลติดต่อผู้เขียน Siri \n --- \n Siri:バージョン：รุ่นของ siri \n Siri:ヘルプ : ข่วยเหลือ \n --- \n 設定:ヘルプ : คำสั่งพื้นฐานที่ใช้ภายในกลุ่ม \n --- \n siriv10:optionalAccount : บัญชีเสริม \n"
			];}
			
			//if(strstr($text,'')){
			//	$messages = [
			//	'type' => 'text',
			//	'text' => ""
			//];}
			
			//if(strstr($text,'Set the lastseens')){
			//	$messages = [
			//	'type' => 'sticker',
			//	'STKID' => '100',
			//	'STKPKGID' => '1',
			//	'STKVER' => '100'
			//];}
			
			//else{$messages = [
			//'type' => 'text',
			//'text' => $text}

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
		elseif ($event['type'] == 'message' && $event['message']['type'] == 'sticker') {

			// Get replyToken
			$replyToken = $event['replyToken'];
					
			//$sticker = array(
			//'type' => 'sticker',
			//'STKID' => '100',
			//'STKPKGID' => '1',
			//'STKVER' => '100'
			//);
			
			//$sticker = [
			//	'type' => 'text',
			//	'text' => ว๊ายขี้อวด
			//];
			
			$sticker = [
			‘type’ => ‘sticker’,
			‘packageId’ => ‘4’,
			‘stickerId’ => ‘300’
			];
			
			//$sticker = array(
			//‘type’ => ‘sticker’,
			//‘packageId’ => ‘4’,
			//‘stickerId’ => ‘300’
			//);
			
			// Make a POST Request to Messaging API to reply to sender
			$url = 'https://api.line.me/v2/bot/message/reply';
			$packet = [
				'replyToken' => $replyToken,
				'messages' =>[$sticker],
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