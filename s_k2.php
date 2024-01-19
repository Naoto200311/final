<?php require 'header.php'; ?>
<?php require 'db-connect.php'; ?>
<div class="has-text-centered">
<h1 class="is-size-3 pt-5">更新確認</h1> 
<br><br><br>
<?php
echo '<p>商品名：',$_POST['s_name'],'</p><br>';
echo '<p>都道府県：',$_POST['s_land'],'</p><br>';
echo '<p>種類：',$_POST['s_kinds'],'</p><br>';
echo '<p>価格：',$_POST['price'],'</p><br>';
echo '<form action="s_k3.php"method="post">';
echo '<input type="hidden" name="s_id" value="',$_POST['s_id'],'">';
echo '<input type="hidden" name="s_name" value="',$_POST['s_name'],'">';
echo '<input type="hidden" name="s_land" value="',$_POST['s_land'],'">';
echo '<input type="hidden" name="s_kinds" value="',$_POST['s_kinds'],'">';
echo '<input type="hidden" name="price" value="',$_POST['price'],'">';
echo '<button type="submit" class="button is-default">更新</button>';
echo '</form>';
?>
</div>
<?php require 'footer.php'; ?>