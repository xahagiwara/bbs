<?php
session_start();

if (!isset($_SESSION["user_name"])) {
  $no_login_url = "../../";
  header("Location: {$no_login_url}");
  exit;
}

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>チャットルーム</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/card.css">
  </head>

  <body>
    <!--コメント送信-->
    <div id="comment">
        <p id="name_print"></p>
        <textarea id="comment_area" onkeyup="sendMessage(event)" placeholder="コメント" maxlength="255"></textarea>
    </div>

    <!--コメント書き込み-->
    <div id="chat"></div>

    <script type="text/javascript" src="../js/comment.js"></script>
  </body>
</html>