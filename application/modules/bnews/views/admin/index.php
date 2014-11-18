<h1>ข่าวสาร</h1>

<table class="list">
	<tr>
		<th>หัวข้อ</th>
		<th width="90">
			<a class="btn" href="bnews/admin/bnews/form">เพิ่มรายการ</a>
		</th>
	</tr>
	<?php foreach($bnews as $row): ?>
	<tr <?php echo cycle()?>>
		<td><?php echo lang_decode($row->title);?></td>
		<td>
			<a class="btn" href="bnews/admin/bnews/form/<?php echo $row->id?>" >แก้ไข</a>
			<a class="btn" href="bnews/admin/bnews/delete/<?php echo $row->id?>" onclick="return confirm('<?php echo lang('notice_confirm_delete');?>')">ลบ</a>
		</td>
		</tr>
		<?php endforeach; ?>
	</table>
<?php echo $bnews->pagination()?>