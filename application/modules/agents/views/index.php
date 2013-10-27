<style>
.boxtextnews3{
float: right;
width: 248px;
height: 95px;
margin-right: 3px;
padding-top: 2px;
}
</style>
<img src="themes/colly/images/title_newsupdate.png" width="153" height="23" class="title_news">
    <div class="linenews">&nbsp;</div>
         <div id="news_bg">
            <div id="contentnews_">
                <ul><br>
                    <?php foreach($agents as $row):?>
                        <li style=" border-right:1px dotted #b2b2b2; border-bottom:1px dotted #b2b2b2;">
                            <img src="<?php echo ($row->image != "")?"uploads/agent/".$row->image:"themes/colly/images/productdetail_show_pic1_.jpg";?>" border="0" class="imgNews_">
                            <div class="boxtextnews3">
                                <span class="dateNews"><?php echo mysql_to_th($row->created);?></span><br>
                                <span class="h_textNews"><?php echo lang_decode($row->name)?></span><br>
                                <div class="textNews2"><?php echo strip_tags(lang_decode($row->address))?></div>
                                <div class="textNews2"><a href="<?php echo $row->website?>" target="_blank"><?php echo $row->website;?></a></div>
                            </div>
                        </li>
                    <?php endforeach;?>
                </ul>
                <div class="clr"></div><br>
            </div>
            
            <div id="pagenumber">
                <?php echo $agents->pagination()?>
            </div>
            
        </div>