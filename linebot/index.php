<?php
require_once __DIR__ . '/lineBot.php';
require_once __DIR__ . '/chopper.php';
$bot = new Linebot();
$text = $bot->getMessageText();
$query = mysqli_query ($ conn, "select reply from replay where accept  = '". $ text. "'");

if (mysqli_num_rows ($ query)> 0) {

      while ($ has = mysqli_fetch_row ($ query)) {

            $ answer = $ has ['0'];

      }

} else {

      $ answer = "sorry, I do not know what you mean";

}

$bot->reply($text);
?>
