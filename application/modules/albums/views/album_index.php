<div id="slider_products" >         
<ul id="highLight_products">
                    <li><img src="themes/colly/images/hilight_gallery_2.jpg" width="877" height="177" /></li>
                </ul>           
            </div>
      <div class="clr"></div>
          <div id="gallery">
            <img src="themes/colly/images/title_gallery.png" width="144" height="27" class="title_product">
        <div class="line">&nbsp;</div>
            
              <ul>
                  <?php foreach($albums as $row): ?>
                      <li>
                          <a href="albums/view/<?php echo $row->id?>"><?php echo thumb('uploads/albums/'.$row->id.'/thumbnail/'.$row->picture->image,180,270,1,'')?></a>
                      </li>
                  <?php endforeach;?>
              </ul>
          </div>
          
          <div id="pagenumber_gallery">
            <?php echo $albums->pagination()?>
          </div>