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
			
			$stickerarray = array('', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '','', '', '', '', '', '', '', '', '', '', '', '', '', '','อย่าส่งให้เห็นอีกนะ', '', 'อิจฉาคนมีสติ๊กเกอร์ใช้จัง', '', 'มีเงินอย่างเดียวซื้อลายนี้ไม่ด้นะเนี่ย ต้อง... ด้วย', '', 'คิดยังไงถึงซื้อลายนี้', '', 'ตอนโหลดลายนี้ ใช้อะไรคิด', '', 'ลายกาก ๆ แบบนี้ กล้าใช้เนอะ', '', 'สติ๊กเกอร์กาก ๆ', '', 'อย่าให้เห็นว่าส่งอีกนะ', '', 'พิมพ์บ้างก็ดีนะ ', '', 'ขอลายอื่นได้ม่ะ ลายนี้เบื่อแล้ว', '', 'คนบ้าอะไร ส่งแต่สติ๊กเกอร์', '', 'ว๊าย ขี้อวด', '', 'รู้แล้วจ๊ะ ว่ามีสติ๊กเกอร์ใช้', '', 'เพิ่งเคยใช้สติ๊กเกอร์สินะ', '', 'ไปไถสติ๊กเกอร์นี้มาจากไหน ขอพิกัดด่วน !!!', '', 'ลบทิ้งไปเถอะ สติ๊กเกอร์กาก ๆ แบบนี้ เก็บไว้ก็เปลืองความจำเครื่อง', '', 'กลัวใช้ไม่คุ้มหรือไง ส่งอยู่ได้ สติ๊กเกอร์', '', 'เกลียดสติ๊กเกอร์ลายนี้ ขอร้อง อย่าส่งอีกนะ สงสารผมเถอะ', '', 'สติ๊กเกอร์ฟรีหรือเปล่าเนี่ย ถึงส่งได้ส่งดี', '', 'จะอวดไปถึงไหน รู้แล้วจ้า ว่ามีสติ๊กเกอร์ใช้', '', 'ส่งมาบ่อย ๆ ซื้อให้มั่งก็ดีนะ', '', 'อย่าส่งให้เห็นอีกนะ ลบทิ้งไปเลยก็ดี สติ๊กเกอร์ลายกาก ๆ แบบนี้', '', 'จะอวดว่ามีสติ๊กเกอร์ใช้สินะ', '', 'ส่งบ่อย ๆ ไม่ดีนะ เดี๋ยวพี่ しりちゃん v10 เค้าโมโหเอานะ', '', 'ซื้อใหม่บ้างเถอะ สติ๊กเกอร์ลายนี้ คิดว่าใช้คุ้มแล้วนะ เห็นจนเบื่อแล้ว', '', 'พิมพ์บ้างเถอะ อย่าส่งแต่สติ๊กเกอร์เลย จะได้ไม่เป็นภาระของสังคมไลน์', '', 'โทรศัพท์กากรึ ไม่มีแป้นพิมพ์ ถึงกดส่งแต่สติ๊กเกอร์', '', 'เรียนมาน้อยสินะ ถึงพิมพ์ไม่เป็น ส่งแต่สติ๊กเกอร์อยู่ได้', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
			$stickeroutput = $stickerarray[array_rand($stickerarray,1)];
			
			$sticker = [
				'type' => 'text',
				'text' => $stickeroutput
			];
			
			//$sticker = [
			//‘type’ => ‘sticker’,
			//‘packageId’ => ‘4’,
			//‘stickerId’ => ‘300’
			//];
			
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