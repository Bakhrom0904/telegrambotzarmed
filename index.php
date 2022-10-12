<?php

include 'Telegram.php';

$telegram = new Telegram('5625918922:AAFYpveZbxVBhEyNSB9GYwzEeKsZ7xOyXOQ');


$chat_id = $telegram->ChatID();
$text=$telegram->Text();


if($text=="/start")
{

    $option = array(
        array($telegram->buildKeyboardButton("O'zbekcha"),$telegram->buildKeyboardButton("Ruscha"))
    );

    $keyb = $telegram->buildKeyBoard($option, $onetime=true, $resize=true);

    $content = array('chat_id' => $chat_id, 'text' => "iltimos tilni tanlang");
    $telegram->sendMessage($content);

    $content = array('chat_id' => $chat_id, 'reply_markup' => $keyb, 'text'=> "/");

    $telegram->sendMessage($content);
}