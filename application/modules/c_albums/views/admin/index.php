<h1>อัลบั้ม</h1>

<?php include "_menu.php";?>

<?php echo $albums->pagination()?>
<table class="list">
	<tr>
		<th>อัลบั้ม</th>
		<th>โดย</th>
		<th width="90">
			<?php if(permission('galleries', 'create')):?>
			<a class="btn" href="c_albums/admin/c_albums/form" class="tiny">เพิ่มรายการ</a>
			<?php endif;?>
		</th>
	</tr>
	<?php foreach($albums as $album): ?>
	<tr <?php echo cycle()?>>
		<td><?php echo lang_decode($album->name,'cn')?></td>
		<td><?php echo $album->user->display?></td>
		<td>
			<?php if(permission('galleries', 'update')):?>
			<a class="btn" href="c_albums/admin/c_albums/form/<?php echo $album->id?>" >แก้ไข</a>
			<?php endif;?>
			<?php if(permission('galleries', 'delete')):?>
			<a class="btn" href="c_albums/admin/c_albums/delete/<?php echo $album->id?>" onclick="return confirm('รูปภาพทั้งหมดในอัลบั้มนี้จะถูกลบโดยอัตโนมัติ\nยืนยันการลบ')">ลบ</a>
			<?php endif;?>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<?php echo $albums->pagination()?>