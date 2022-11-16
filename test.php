<html>
  <meta charset="UTF-8">
  <head>
    <title>接続試験</title>
  </head>
  <body>
  <h2>MySQL 接続試験</h2>
<?php

// ""サーバ名"" "ユーザ名" "パスワード" "データベース名"　をそれぞれ指定する。適宜修正すること。
$mysqli = new mysqli("localhost", "root", "", "test_mysql");

// 接続状況をチェックします
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

// サーバーが稼動中かどうかを確認します
if ($mysqli->ping()) {
    printf ("Connection is OK!\n");
} else {
    printf ("Error: %s\n", $mysqli->error);
}

// 接続を閉じます
$mysqli->close();

?>
  </body>
</html>
