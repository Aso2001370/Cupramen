<?php require 'header.php';?>
<?php
$pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;
            dbname=LAA1291596-katougumi;charset=utf8',
    'LAA1291596',
    'katougumi');
$sql=$pdo->prepare('select * from item where item_name like ?');
$sql->execute(['%'.$_POST['key'].'%']);

foreach ($sql as $row) {
    echo'<form action="insert.php"method="post">';
    echo'<p>商品番号:',$row['item_id'],'</p>';
    echo'<p>商品名:',$row['item_name'],'</p>';
    echo'<p>値段:',$row['price'],'</p>';
    echo'<p>個数:<select name="count">';
    for ($i=1; $i<=10; $i++) {
        echo '<option value="', $i, '">', $i, '</option>';
    }
    echo'</select></p>';
    echo '<input type="hidden" name="item_id" value="',$row['item_id'],'">';
    echo '<input type="hidden" name="item_name" value="',$row['item_name'],'">';
    echo '<input type="hidden" name="price" value="',$row['price'],'">';
    echo'<p><input type="submit" value="カートに追加"></p>';
    echo'</form>';

}
$pdo=null;
?>
<?php require '../footer.php';?>
</body>
</html>

