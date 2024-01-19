<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>
<div class="has-text-centered">
    
    <h1 class="is-size-3 pt-5">商品登録</h1>
    <?php
    for($i=0;$i<2;$i++){
    echo '<br>';
    }
    ?>

    <form action="s_t2.php" method="post">
    <dt>名前</dt>
    <dd><input type="text" name="s_name" required></dd>
    <dt>都道府県</dt>
    <dd><input type="text" name="s_land" required></dd>
    <dt>種類</dt>
    <dd><input type="text" name="s_kinds" required></dd>
    <dt>価格</dt>
    <dd><input type="number" name="price" required></dd><br>
    <button type="submit" class="button is-default">登録</button>
    </form>
    </div>
<?php require 'footer.php'; ?>
