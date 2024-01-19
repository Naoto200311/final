<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>
<?php
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1518109-final;charset=utf8'
    ,'LAA1518109'
    ,'Naoto2003');
    $sql=$pdo->prepare(
        'delete from Shohin where s_id=?');
    $sql->execute([$_POST['s_id']]);
?>
<div class="has-text-centered">
<h1 class="has-text-centered is-size-3 pt-5">削除完了</h1><br>
<br><br>
<p class="has-text-centered">商品を削除しました。</p><br>
<br><br>
<form action="final.php" method="post">
<button type="submit"  class="button is-default">ホームへ</button>
</form>


</div>
<?php require 'footer.php'; ?>