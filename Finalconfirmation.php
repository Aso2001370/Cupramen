<?php require 'header.php';?>

<form method="post" action="FinalconfirmationUPDATE.php" class="login">
<h1>まだ注文は確定してません!</h1>
<p>住所はお間違えないでしょうか</p>

<?php
//セッションから取得（仮で2番にしている）
session_start();
    $id = $_SESSION['mail'];
    $pdo = new PDO('mysql:host=mysql154.phy.lolipop.lan;
dbname=LAA1291596-katougumi;charset=utf8',
        'LAA1291596',
        'katougumi');

    $sql = $pdo->prepare('SELECT * from customer  WHERE customer_id=?');
    $sql->execute([$id]);
    foreach ($sql as $data) {
        echo 'メールアドレス', '<input type="text" name="mail" value="', $data['mail'], '">';
        echo '<br>';
        echo '名前', '<input type="text" name="name" value="', $data['name'], '">';
        echo '<br>';
        echo '住所', '<input type="text" name="address" value="', $data['address'], '">';
        echo '<br>';
        echo '<button type="submit">編集</button>';
    }
?>

<input type="button" onclick="location.href='orderEnd2.php'" value="はい">
<input type="button"　class="text1" onclick="history.back()" value="いいえ">
</form>

<?php require 'footer.php'; ?>


