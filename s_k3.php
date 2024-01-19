<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>
<div class="has-text-centered">
<h1 class="is-size-3 pt-5">更新完了</h1>
<p class="pt-5">以下の内容で更新されました。</p><br>
<?php

echo '<div class="pt-5">';
echo '<p>名前：',$_REQUEST['s_name'],'</p><br>';
echo '<p>都道府県：',$_REQUEST['s_land'],'</p><br>';
echo '<p>種類：',$_REQUEST['s_kinds'],'</p><br>';
echo '<p>価格：',$_REQUEST['price'],'</p>';
echo '</div>';
echo '<br>';
echo '<form action="final.php" method="post">';
echo '<button type="submit"  class="button is-default">ホームへ</button>';
echo '</form>';
?>
</div>
<?php
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1518109-final;charset=utf8'
    ,'LAA1518109'
    ,'Naoto2003');
    $sql=$pdo->prepare(
        'update Shohin set s_name=?,s_land=?,s_kinds=?,price=? where s_id=?');
    $sql->execute([$_REQUEST['s_name'],$_REQUEST['s_land'],$_REQUEST['s_kinds'],$_REQUEST['price'],$_REQUEST['s_id']]);
?>

<?php require 'footer.php'; ?>