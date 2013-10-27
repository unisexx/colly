<div id="products">
    <img src="themes/colly/images/title_product.png" width="160" height="28" class="title_product"><div class="line">&nbsp;</div>
    
      <ul>
          <?php foreach($albums as $row): ?>
            <li>
                <a href="products/view/<?php echo $row->id?>"><img src="uploads/albums/<?php echo $row->id ?>/thumbnail/<?php echo $row->picture->image ?>" width="190" height="171" /><br><?php echo lang_decode($row->name)?> <span class="num">(<?php echo $album->picture->count() ?> ภาพ)</span></a>
            </li>
          <?php endforeach;?>
      </ul>
      
    <div id="pagenumber">
        <?php echo $albums->pagination()?>
    </div>
</div>