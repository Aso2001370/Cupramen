<?php require 'header.php';?>

<?php
    $pdo=new PDO('mysql:host=mysql154.phy.lolipop.lan;
dbname=LAA1291596-katougumi;charset=utf8',
'LAA1291596',
'katougumi');

    $sql=$pdo->prepare('select * form customer where id=?');
    $sql->execute([$_POST['id']]);
    foreach ($sql as $row){
        //echo '<p><img src="iamge/',$row['id],'.jpg"></p>';
        echo'<form action="insert.php"method="post">';
        echo'<p>商品番号:',$row['id'],'</p>';
        echo'<p>商品名:',$row['item_name'],'</p>';
        echo'<p>個数:',$row['price'],'</p>';
        echo'<p>個数:<select name="count">';
        for ($i=1; $i<=10; $i++) {
            echo '<option value="', $i, '">', $i, '</option>';
        }
        echo'</select></p>';
        echo '<input type="hidden" name="id" value="',$row['id'],'">';
        echo '<input type="hidden" name="name" value="',$row['name'],'">';
        echo '<input type="hidden" name="price" value="',$row['price'],'">';
        echo'<p><input type="submit" value="カートに追加"></p>';
        echo'</form>';
    }
    ?>

<?php require '../footer.php';?>


