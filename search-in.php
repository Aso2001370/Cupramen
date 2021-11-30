<?php require 'header.php';?>

    <title>カップラーメン</title>
    <!-- キーワード検索[item_name] -->
    <form action="search-out.php" method="post">
        <input type="text" name="key-item_name" value="">
        <button type="submit">検索</button>
    </form>

    <!-- 種類検索[category_name] -->
    <form action="search-category-out.php" method="post">
        <input type="text" name="key-category_name" value="">
        <button type="submit2">検索</button>
    </form>

    <!-- 種類検索[company_name] -->
    <form action="search-company-out.php" method="post">
        <input type="text" name="key-company_name" value="">
        <button type="submit3">検索</button>
    </form>

<?php require 'footer.php';?>