<?php require 'header.php';?>

<?php
// DB接続
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;
            dbname=LAA1291596-katougumi;charset=utf8',
    'LAA1291596',
    'katougumi');



// DB入力式(情報が正しく入力されていたら登録完了のメッセージ)
$sql=$pdo->prepare('INSERT INTO customer VALUES(null,?,?,?,?,?)');
if($sql->execute([$_POST['pass'],$_POST['mail'],$_POST['name'],$_POST['address'],$_POST['tel']])){
    echo '登録しました。';
    echo '<button type="submit">customer登録確認</button>';
}else{
    echo '登録に失敗しました。';
    echo '<a href="customer-list.php" >customer一覧</a>';
}
?>
<?php require 'footer.php'; ?>

