<?php session_start();?>
<?php require 'header.php';?>.
<h1>まだ注文は確定してません!</h1>
<p>住所、メールアドレス、電話番号はお間違えないでしょうか?</p>

<?php
//セッションから取得（仮で2番にしている）
$id = $_SESSION['ab'];
//$getid=$_SESSION['abcd'];
    $pdo = new PDO('mysql:host=mysql154.phy.lolipop.lan;
dbname=LAA1291596-katougumi;charset=utf8',
        'LAA1291596',
        'katougumi');

$sql = $pdo->prepare('SELECT * from customer WHERE mail=?');
$sql->execute(['ab']);
//$sql->execute([$id]);

//foreach ($_SESSION as $data) {
//        echo 'メールアドレス', '<input type="text" name="mail" value="', $id['mail'], '">';
//        echo '<br>';
//        echo '名前', '<input type="text" name="name" value="', $id['name'], '">';
//        echo '<br>';
//         echo '住所', '<input type="text" name="address" value="', $id['address'], '">';
//         echo '<br>';
//         echo '電話番号', '<input type="text" name="tel" value="', $id['tel'], '">';
//         echo '<br>';
//    }
//


foreach ($id as $key => $id) {
echo 'メールアドレス', '<input type="text" name="mail" value="', $id['mail'], '">';
echo '<br>';

}
?>



<input type="button" onclick="location.href='END.php'" value="はい">
    <input type="button" onclick="location.href='home.php'" value="いいえ">
</form>

<?php require 'footer.php'; ?>


