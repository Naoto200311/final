<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>
<div class="has-text-centered">
<form action="s_t.php" method="post">
<div class="pt-5">
<button type="submit" class="button is-info is-light fas fa-cash-register">商品登録</button>
</div>
</form>
<div class="pt-5">商品一覧</div><br>
<?php
$pdo=new PDO('mysql:host=mysql220.phy.lolipop.lan;dbname=LAA1518109-final;charset=utf8','LAA1518109','Naoto2003');
echo '<table border="1" class="table1 pb-5">';
echo '<tr><th>ID</th><th>名前</th><th>都道府県</th><th>種類</th><th>価格</th><th>更新</th><th>削除</th></tr>';
$sql=$pdo->query('select * from Shohin');
foreach ($sql as $row){
echo '<tr>';
echo '<td>',$row['s_id'],'</td>';
echo '<td>',$row['s_name'],'</td>';
echo '<td>',$row['s_land'],'</td>';
echo '<td>',$row['s_kinds'],'</td>';
echo '<td>',$row['price'],'円</td>';
echo '<td>';
echo '<form action="s_k.php"method="post">';
echo '<input type="hidden" name="s_id" value="',$row['s_id'],'">';
echo '<button type="submit">更新</button>';
echo '</form>';
echo '</td>';
echo '<td>';
echo '<form action="s_d.php"method="post">';
echo '<input type="hidden" name="s_id" value="',$row['s_id'],'">';
echo '<button type="submit">削除</button>';
echo '</td>';
echo '</form>';
}
?>
</div>



<?php require 'footer.php'; ?>