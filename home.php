<?php require 'header.php';?>
<h1>カップ麺専門店</h1>
<form method="post" action="search-out.php" class="login">
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

<div>
    <p class="recommendation">おすすめ</p>
    <img src=""  class="image1">
    <img src=""  class="image2">
    <img src=""  class="image3">
</div>
</form>
<?php require 'footer.php'; ?>


