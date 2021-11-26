<?php require 'header.php';?>
    <title>カップラーメン</title>
    <form method="post" action="search-out.php" class="login">
        <input taype="text">
        <select name="key">
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
<?php require '../footer.php';?>