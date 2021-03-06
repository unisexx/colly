<script type="text/javascript" src="media/js/easyslider1.7/js/easySlider1.7.js"></script>
<link href="media/js/easyslider1.7/css/screen.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript">
$(document).ready(function(){   
    $("#slider").easySlider({
        auto: true, 
        numeric: false,
        numericId: 'controls',
        continuous: true,
        pause: 5000
    });
});
</script>

<div id="slider">
    <ul>
        <?php foreach($hilights as $hilight):?>
            <li>
                <div>
                    <a href="<?=$hilight->url?>">
                        <?php // echo thumb("uploads/hilight/".$hilight->image,931,511,1)?>
                        <img src="uploads/hilight/<?=$hilight->image?>" width="931" height="511">
                    </a>
                    <div class="clear"></div>
                </div>
            </li>
        <?php endforeach;?>     
    </ul>
</div>