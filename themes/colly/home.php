<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo base_url(); ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $template['title']; ?></title>
<?php include_once('_css.php')?>
<?php include_once('_script.php')?>
<?php echo $template['metadata']; ?>
</head>
<body>
<div id="wrap">
    <div class="main">
        <?php include_once '_header.php';?>
        
        <div class="arrow_left"><a href="#"><img src="themes/colly/images/arrow_left.png" border="0"></a></div>
          <div id="slider" >            
            <ul id="highLight">
                <li><a href="#"><img src="themes/colly/images/hilight01.jpg" width="931" height="511" border="0" /></a></li>
            </ul>           
          </div>
        <div class="arrow_right"><a href="#"><img src="themes/colly/images/arrow_right.png" border="0"></a></div>
    <div class="clr"></div>
        <?php echo modules::run('products/inc_home'); ?>
        <br>
        <div class="clr"></div>
        
        <?php echo modules::run('bnews/inc_home'); ?>
         
      <div id="fb"><img src="themes/colly/images/fb.jpg" width="286" height="351" /></div>
        <div class="clr"></div>
  </div>
  <?php include_once '_footer.php';?>

</div>
</body>
</html>
