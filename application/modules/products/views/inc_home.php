<style>
#products_recomment li a{color:#858282; font-size:15px;}
</style>
<div id="products_recomment">
  <img src="themes/colly/images/title_product.png" width="160" height="28" class="title_product"><div class="line">&nbsp;</div>

  <ul>
      <?php foreach($products as $row):?>
          <li>
              <a href="products/view/<?php echo $row->id?>"><img src="uploads/product/<?php echo $row->image?>" width="280" height="170" border="0"><br><br>
              <span class="title"><?php echo strip_tags(lang_decode($row->title))?></span>
            </a>
          </li>
      <?php endforeach;?>
  </ul>
</div>