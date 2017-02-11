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
			
			if($text == '.'){
				$messages = [
				'type' => 'text',
				'text' => viewlastseen
			];}
			
			if($text == '..'){
				$messages = [
				'type' => 'text',
				'text' => setlastpoint
			];}
//			
			namespace LINE\Tests\LINEBot;
			use LINE\LINEBot\Response;
			class ResponseTest extends \PHPUnit_Framework_TestCase
{
			public function testGetHeader()
    {
			$response = new Response(200, '{"body":"text"}', [
            'Content-Type' => 'application/json',
            'Content-Length' => '15',
			]);
			$this->assertEquals('application/json', $response->getHeader('Content-Type'));
			$this->assertEquals('15', $response->getHeader('Content-Length'));
			$this->assertNull($response->getHeader('Not-Exists'));
    }
			public function testGetHeaders()
    {
			$response = new Response(200, '{"body":"text"}', [
            'Content-Type' => 'application/json',
            'Content-Length' => '15',
			]);
			$headers = $response->getHeaders();
			$this->assertEquals(2, count($headers));
			$this->assertEquals('application/json', $headers['Content-Type']);
			$this->assertEquals('15', $headers['Content-Length']);
    }
}
//			
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