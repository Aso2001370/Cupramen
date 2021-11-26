<?php
session_start();
?>

<?php require 'header.php';?>
<?php
unset($_SESSION['customer']);
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;
            dbname=LAA1291596-katougumi;charset=utf8',
    'LAA1291596',
    'katougumi');

$sql=$pdo->prepare('select * from customer where mail=? and pass=?');
$sql->execute([$_POST['mail'],$_POST['pass']]);

foreach ($sql as $row) {
    $_SESSION['customer']=[
        'mail'=>$row['mail'],
        'pass'=>$row['pass'],
    ];
}

if(isset($_SESSION['customer'])){
    echo 'ログイン完了！';
  echo '<meta http-equiv="refresh" content=" 3; url=./home.php">';
}else{
    echo 'IDまたはパスワードが正しくありません。';
}
$pdo=null;
?>
<?php require '../footer.php';?>

