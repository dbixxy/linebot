<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '6963da5f9026af3311962c9ff23e4b81';
$access_token = '7Af83hBtZ+AAdf+fxdaO09IqhGUpgqoW9LVk1Zkp3FcYFRGvICOikhUk8Qc63bmRtbuRCUbHL9qp9AxtfOVlvUnBJOxWuJ6EgqlZSxCCALCBdpHNuzJ7VjcJUVnfL3XSIB9cVV+s8wcOUOlghs6raAdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
	$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
	exit();

}