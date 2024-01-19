<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>
<div class="has-text-centered">
    
    <h1 class="is-size-3 pt-5">商品更新</h1>
    <?php
    for($i=0;$i<2;$i++){
    echo '<br>';
    }
    ?>
    <?php
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1518109-final;charset=utf8'
    ,'LAA1518109'
    ,'Naoto2003');
    $sql=$pdo->prepare('select * from Shohin');
    ?>


    <form action="s_k2.php" method="post">
    <?php echo  '<input type="hidden" name="s_id" value="',$_POST['s_id'],'">';?>
    <dt>名前</dt>
    <dd><input type="text" name="s_name" required></dd>
    <dt>都道府県</dt>
    <dd><input type="text" name="s_land" required></dd>
    <dt>種類</dt>
    <dd><input type="text" name="s_kinds" required></dd>
    <dt>価格</dt>
    <dd><input type="number" name="price" required></dd><br>
    <button type="submit" class="button is-default">更新</button>
    </form>
    </div>
<?php require 'footer.php'; ?>
