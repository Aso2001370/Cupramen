<?php require 'header.php';?>

    <?php
        if (!empty($_SESSION['product'])) {
            echo '<table>';
            echo '<th>商品番号</th><th>商品名</th>';
            echo '<th>価格</th><th>個数</th><th>小計</th>';
            $total = 0;
            foreach ($_SESSION['product'] as $id => $product) {
                echo '<tr>';
                echo '<td>', $id, '</td>';

                echo '<td><a href="search-in.php?id=', $id, '">',

                $product['item_name'], '</a></td>';
                echo '<td>', $product['price'], '</td>';
                echo '<td>', $product['count'], '</td>';
                $subtotal = $product['price'] * $product['count'];
                $total += $subtotal;
                echo '<td>', $subtotal, '</td>';
                echo '<form method="post" name="item_id" action="delete.php">';
                echo '<td><a href="delete.php?id=', $id, '">削除</a></td>';
                echo '</tr>';
                echo '</form>';
            }
            echo '<tr><td>合計</td><td></td><td></td><td><td><td>', $total,
            '</td><td></td></tr>';
            echo '</tsble>';
        } else {
            echo 'カートに商品がありません。';
    }

?>
<p>以下の商品でお間違えないですか？</p>
<input type="button" onclick="location.href='Finalconfirmation.php'" value="はい">
<input type="button"　class="text1" onclick="history.back()" value="いいえ">
</form>
<?php require 'footer.php'; ?>
