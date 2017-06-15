<?php 
use yii\widgets\LinkPager;

 ?>


<center>
	<table border="1">
		<tr>
			<td>编号</td>
			<td>小说名称</td>
			<td>作者</td>
			<td>价格</td>
			<td>简介</td>
		</tr>
		<?php foreach ($res as $key => $value): ?>
		<tr>
        <td><?php echo $value['id'] ?></td>
        <td><?php echo $value['novel_name'] ?></td>
        <td><?php echo $value['author'] ?></td>
        <td><?php echo $value['price'] ?></td>
        <td><?php echo $value['desc'] ?></td>
		</tr>
		<?php endforeach ?>
	</table>
	<?= LinkPager::widget(['pagination' => $pages]); ?>
</center>