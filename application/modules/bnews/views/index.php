<img src="themes/colly/images/title_newsupdate.png" width="153" height="23" class="title_news">
    <div class="linenews">&nbsp;</div>
         <div id="news_bg">
            <div id="contentnews_">
                <ul><br>
                    <?php foreach($bnews as $row):?>
                        <li style=" border-right:1px dotted #b2b2b2; border-bottom:1px dotted #b2b2b2;">
                            <a href="news/view/<?php echo $row->id?>"><img src="uploads/bnew/<?php echo $row->image?>" border="0" class="imgNews_"></a>
                            <div class="boxtextnews2">
                                <span class="dateNews"><?php echo mysql_to_th($row->created);?></span><br>
                                <span class="h_textNews"><?php echo lang_decode($row->title)?></span><br>
                                <a href="news/view/<?php echo $row->id?>" class="textNews2"><?php echo strip_tags(lang_decode($row->detail))?></a>
                            </div>
                        </li>
                    <?php endforeach;?>
                </ul>
                <div class="clr"></div><br>
            </div>
            
            <div id="pagenumber">
                <?php echo $bnews->pagination()?>
            </div>
            
        </div>