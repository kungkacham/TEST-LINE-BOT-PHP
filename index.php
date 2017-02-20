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
			
			$rawomg = "กฎในการเทสก่อนเข้าแคลน (ปรับปรุง 02/11/59)

1. ไม่อยู่ในสังกัดของแคลนใด ๆ ขณะทำการเทส หากทราบจะทำการแบนทันที

2. จะต้องมีการ์ดตัวละคร S+ LV. 30 คุมเต๋า 83 ขึ้นไป และมีจี้ที่จำเป็นสำหรับสายวิคเตอรี่และสายล้มละลาย เทียบเท่า S+ LV. 7 ขึ้นไป ถ้าจี้ S+ LV. 7 ยังไม่ครบ 4 ชิ้นขึ้นไป จะยังไม่ส่งลงแข่งในรายการต่าง ๆ

3. จะทำการเทสด้วยแผนที่ "ประเทศไทย" 2 ครั้ง
โดยจะเป็นการเทสเดี่ยว 1 ครั้ง และทีม 1 ครั้ง ต้องชนะอย่างน้อย 1 ครั้ง จึงจะผ่านเข้าแคลนได้ อนุโลมได้ถ้าผู้เทสเห็นว่ามีศักยภาพมากพอในการเข้าร่วมกับแคลนได้

* การเทสทีมให้คนมาขอเข้าเทสเล่นคู่กับคนเทส แล้วไปสุ่มหาคู่แข่งในห้อง 10 M 
* การเทสอาจมีการเปลี่ยนแปลงตามความเหมาะสม ขึ้นอยู่กับผู้ทำการเทส

4. หากเทสแล้ว "ผ่าน" ให้ผู้สมัครเปลี่ยนชื่อในไลน์เป็น (OMG)-ชื่อ-ตัวเลข ส่วนในเกมให้เปลี่ยนเป็น (OMG)-ตัวเลข เช่น ชื่อในไลน์เป็น (OMG)-ABC-00 ในเกมส์จะเป็น (OMG)-00 ชื่อในเกมสามารถเปลี่ยนทีหลังได้ หากไม่มีเพชรเปลี่ยน แต่ต้องเปลี่ยนภายใน 24 ชม. หลังจากทราบว่า 'ผ่าน' แล้ว 

*ตัวเลขที่ต้องใส่คนเทสจะเป็นคนแจ้งให้ทราบ 

5. เมื่อดึงเข้าแคลนแล้ว ให้แนะนำตัว (ชื่อ อายุ) และอ่านโน๊ตทุกโน๊ตในหน้าโน๊ตของห้องแคลน

6. ต้องมีเวลาว่างช่วงเวลา 17.00 - 22.30 น. ตรงต่อเวลา และเข้ามาคุยในแคลนเป็นประจำ

7. ปฏิบัติตามกฎของแคลนได้ทุกข้อ สามารถอ่านได้ที่โน๊ตของกลุ่ม

*** ไม่สะดวกข้อไหนกรุณาแจ้งล่วงหน้า มิฉะนั้นหากเข้าแคลนแล้ว อาจโดนให้ออกจากแคลน โดยไม่แจ้งให้ทราบล่วงหน้า";
			
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