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
			
			if($text == 'view' || $text == 'view ' || $text == '.'){
				$messages = [
				'type' => 'text',
				'text' => viewlastseen
			];}
			
			if($text == 'set' || $text == 'set '  || $text == '..'){
				$messages = [
				'type' => 'text',
				'text' => setlastpoint
			];}		
			
			if(strstr($text,'have seen at the lastseen point')){
				$messages = [
				'type' => 'text',
				'text' => setlastpoint
			];}
			
			if(strstr($text,'Set the lastseens')){
				$messages = [
				'type' => 'sticker',
				'STKID' => '100',
				'STKPKGID' => '1',
				'STKVER' => '100'
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

private function check_message_type($rcv_message) {

    //line id($rcv_message->from)からユーザ情報を読み出す
    $result_text = $this->ncmb_get_user($rcv_message->from);

    switch ($rcv_message->contentType) {
        case 1: // TEXT
            $result_text .= "\n"."「".$rcv_message->text."」ですね！";
            break;
        case 2: // Image
            $result_text .= "\n"."写真 ですね！";
            break;
        case 3: // Video
            $result_text .= "\n"."ビデオ ですね！";
            break;
        case 4: // Audio
            $result_text .= "\n"."音声メモ ですね！";
            break;
        case 7: // Location
            $result_text .= "\n"."あなたの現在地は ".$rcv_message->location->address;
            $result_text .= "\n"."緯度経度は(".(string)$rcv_message->location->latitude;
            $result_text .= ",".(string)$rcv_message->location->longitude.")ですね。";
            break;
        case 8: // Sticker
            //STKPKGIDとSTKIDからスタンプを判定
            $result_text .= $this->check_sticker((string)$rcv_message->contentMetadata->STKPKGID,
                                          (string)$rcv_message->contentMetadata->STKID);
            break;
        case 10: // Contact
            $result_text .= "\n".".mid=".(string)$rcv_message->contentMetadata->mid;
            $result_text .= "\n".".displayName=".(string)$rcv_message->contentMetadata->displayName;
            break;
        default :
            break;
    }

    return $result_text;

}




echo "OK";