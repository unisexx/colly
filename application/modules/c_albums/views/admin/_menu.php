<style type="text/css">
#horri_menu{
	border-bottom:2px solid #0080C0;
}
#horri_menu ul li{
	float:left;
	padding:5px;
	background:#f4f4f4;
	border-right:1px solid #ddd;
}
#horri_menu ul li.active{
	background:#0080C0;
}
#horri_menu ul li.active a{
	color:#fff;
}
</style>
<div id="horri_menu">
    <ul>
    	<li <?php echo menu_active2('c_albums','c_videos')?>><a href="c_albums/admin/c_videos/form/1">วิดีโอ</a></li>
		<li <?php echo menu_active2('c_albums','c_albums')?>><a href="c_albums/admin/c_albums">อัลบัม</a></li>
    </ul>
	<br class="clear">
</div>
