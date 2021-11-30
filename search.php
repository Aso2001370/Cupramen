<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>おすすめ</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<h2>キーワード検索</h2><br>
<form action="どこか.php" method="post">
    <input type="text" name="kensaku">
    <button type="submit" name="action" value="send">検索</button>
</form>
<form action="どこか.php" method="post">
    オススメから探す<br>
    <select name="osusume">
        <option value="1">新入荷</option>
        <option value="2">ランキング</option>
        <option value="3">販売数</option>
        <option value="4">レビュー</option>
    </select>
    <button type="submit" name="action" value="send">種類検索</button>
</form>
<a href="home.php" class="home">ホーム</a>
<a href="kato-in-php" class="login">ログイン</a>
<a href="search.php" class="search">検索</a>
<a href="in1.php" class="basket">カート</a>
</body>
</html>