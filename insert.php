<?php session_start();?>
<?php require 'header.php';?>

<?php
$id=$_POST['item_id'];
if(!isset($_SESSION['product'])){
    $_SESSION['product']=[];
}
$count=0;
if(isset($_SESSION['product'][$id])){
    $count=$_SESSION['product'][$id]['count'];
}
$_SESSION['product'][$id]=[
    'item_name'=>$_POST['item_name'],
    'price'=>$_POST['price'],
    'count'=>$count+$_POST['count']
];
echo'<p>カートに商品を追加しました。</p>';
echo '<hr>';
require 'cart.php';
?>
<?php require '../footer.php';?>
