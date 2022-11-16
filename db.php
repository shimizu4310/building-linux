<html>
  <meta charset="UTF-8">
  <head>
    <title>検索結果</title>
  </head>
  <body>
  <h2>検索結果</h2>
<?php

$uid = $_GET['uid'];
$pass = $_GET['password'];
$sql = "SELECT email FROM testTable where uid='{$uid}' AND passwd='{$pass}'";

// SQL文を確認したい場合は下記のコメントアウトを外す。
//echo $sql;
//echo "<br>";
//echo "<hr>";

$mysqli = new mysqli("localhost", "root", "", "test_mysql");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    $mysqli->set_charset("utf8");
}


//SQL実行
if ($result = $mysqli->query($sql)) {
    if($result->num_rows == 0){
      echo "ユーザIDもしくはパスワードが誤っています。";
      echo "<br>";
    } else {
        echo "登録されているメールアドレスは以下の通りです。<hr>";
        echo "ユーザID：{$uid}<br><br>";
        while ($row = $result->fetch_assoc()) {
   	   echo $row['email'];
	   echo "<br>";
        }
    }
    $result->close();
} else {
    echo "SQL実行に失敗しました。";
}

$mysqli->close();

?>
  <hr>
  <a href="index.html">入力画面に戻る</a>
  </body>
</html>
