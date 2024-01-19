<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>
<?php
    $pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1518109-final;charset=utf8'
    ,'LAA1518109'
    ,'Naoto2003');
    $sql=$pdo->prepare('insert into Shohin(s_name,s_land,s_kinds,price) values (?,?,?,?)');
    $sql->execute([$_POST['s_name'],$_POST['s_land'],$_POST['s_kinds'],$_POST['price']]);
?>
<div class="has-text-centered">
<h1 class="is-size-3 pt-5">登録完了</h1><br>
<p class="pt-5">登録を完了しました</p>
<br>
<br>
<br>
<br>
<br>
    <form action="s_t.php" method="post">
    <button type="submit" class="button is-default">登録を続ける</button>
</form>
</div>

<?php require 'footer.php'; ?>