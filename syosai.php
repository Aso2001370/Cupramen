<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>おすすめ</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
日清食品<br>
カップヌードル<br>
<img src="1_o.jpg"><br>
￥180
<form action="cart.php" method="post">
    <select name="kosuu">
        <?php
        for ($i = 1; $i <=99; $i++){
            print ('<option value"'.$i.'">'.$i.'</option>');
        }
        ?>
    </select>
    <button type="submit" name="action" value="send">カートに追加</button>
</form>
<a href="home.php" class="home">ホーム</a>
<a href="kato-in-php" class="login">ログイン</a>
<a href="search.php" class="search">検索</a>
<a href="in1.php" class="basket">カート</a>
</body>
