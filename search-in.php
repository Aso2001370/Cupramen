<?php require 'header.php';?>

    <title>カップラーメン</title>

    <!-- キーワード検索[item_name] -->
    <p>・キーワード検索</p>
    <form action="search-out.php" method="post">
        <input type="text" name="key-item_name" value="">
        <button type="submit">検索</button>
    </form>

    <br>
    <br>

    <!-- 種類検索[category_name] -->
    <p>カテゴリ</p>
    <form action="search-category-out.php" method="post">
        <select name="key-category_name">
            <option value="豚骨">豚骨</option>
            <option value="味噌">味噌</option>
            <option value="塩">塩</option>
            <option value="とんこつ醤油">とんこつ醤油</option>
            <option value="焼きそば">焼きそば</option>
            <option value="辛い">辛い</option>
            <option value="うどん">うどん</option>
            <option value="そば">そば</option>
            <option value="カレー">カレー</option>
            <!--            <option value="">加藤</option>-->
            <!--            <option value="">味噌</option>-->
            <!--            <option value="">味噌</option>-->
            <!--            <option value="">味噌</option>-->
            <!--            <option value="">味噌</option>-->
        </select>
        <button type="submit">検索</button>
    </form>

    <br>
    <br>

    <!-- 種類検索[company_name] -->
    <form action="search-company-out.php" method="post">
        <select name="key-company_name">
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <option value=""></option>
            <!--            <option value="">加藤</option>-->
            <!--            <option value="">味噌</option>-->
            <!--            <option value="">味噌</option>-->
            <!--            <option value="">味噌</option>-->
            <!--            <option value="">味噌</option>-->
        </select>
        <button type="submit">検索</button>
    </form>

<?php require 'footer.php';?>

key-category_name
key-company_name
