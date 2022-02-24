<?php


$token = "5278683226:AAFXMljfvWo6_1Qle4In4AN2VXxy1mK5als";
$web = "https://api.telegram.org/file/bot".$token;
$link1 = "https://api.telegram.org/bot".$token;


$updates = file_get_contents('php://input');
$updates = json_decode($updates, TRUE);
//updates
$msgID = $updates['message']['from']['id'];
$name = $updates['message']['from']['first_name'];
$text = $updates['message']['text'];

//if msg
switch($text)
{
		case"/start":
		sendmsg($msgID,"welcome $name");
		break;
		case"hello":
        sendmsg($msgID,"hellow $name");    
		break;	
}
//functions
function sendmsg($msgID,$text){
    $url=$GLOBALS[link1].'/sendMessage?chat_id='.$msgID.'&text='.urlencode($text);
    file_get_contents($url);



}





?>