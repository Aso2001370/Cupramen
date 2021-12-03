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
</form>
<div class="img">
    <p class="recommendation">おすすめ</p>
    <div>
    <img src="img/1.jpg"  class="image">
    <img src="img/2.jpg"  class="image">
    <img src="img/3.jpg"  class="image">
    <br>
    <img src="img/4.jpg"  class="image">
    <img src="img/5.jpg"  class="image">
    <img src="img/6.jpg"  class="image">
    <br>
    <img src="img/7.jpg"  class="image">
    <img src="img/8.jpg"  class="image">
    <img src="img/9.jpg"  class="image">
    </div>
</div>
<?php require 'footer.php'; ?>


