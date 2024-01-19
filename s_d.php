<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>
<h1 class="has-text-centered is-size-3 pt-5">削除確認</h1><br>
<?php
$pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1518109-final;charset=utf8'
,'LAA1518109'
,'Naoto2003');
$sql=$pdo->prepare('select * from Shohin where s_id=?');
$sql->execute([$_POST['s_id']]);
foreach ($sql as $row){
echo '<p class="has-text-centered">商品名：',$row['s_name'],'</p>';
echo '<br>';
echo '<p class="has-text-centered">都道府県：',$row['s_land'],'</p>';
echo '<br>';
echo '<p class="has-text-centered">種類：',$row['s_kinds'],'</p>';
echo '<br>';
echo '<p class="has-text-centered">価格：',$row['price'],'</p>';
echo '<br>';

}
?>
<?php
echo '<p class="has-text-danger has-text-centered">削除します。よろしいですか</p><br>';
echo '<div class="has-text-centered">';
echo '<form action="s_d2.php"method="post">';
echo '<input type="hidden" name="s_id" value="',$_POST['s_id'],'">';
echo '<button type="submit" class="button is-default">削除</button>';
echo '</form>';
echo '</div>';
?>
<?php require 'footer.php'; ?>