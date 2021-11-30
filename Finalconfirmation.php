<?php require 'header.php';?>
<h1>まだ注文は確定してません!</h1>
<p>住所はお間違えないでしょうか</p>

<?php
//セッションから取得（仮で2番にしている）

    $id = 2;
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

<input type="button" onclick="location.href='END.php'" value="はい">
    <input type="button" onclick="location.href='home.php'" value="いいえ">
</form>

<?php require 'footer.php'; ?>


