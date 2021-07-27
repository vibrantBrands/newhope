<?php require('elements/header.php'); ?>

<div class="page-header">
    <?php
       $page = Page::getCurrentPage();

           if($image = $c->getAttribute('header_image')):
               $image = $c->getAttribute('header_image');
               $image_src = $image->getRelativePath();
       ?>
           <img src='<?php echo $image_src; ?>'>
           
       <?php else: ?>
           <img src='<?php echo $this->getThemePath() ?>/images/placeholder.png' alt='New Hope Community'>
           
       <?php endif; ?>
       
</div>

<section class="internal_content_wrapper">
  <div class="container">
     <?php
      $a = new Area("Internal Content"); 
      $a->display($c);
    ?>
  </div>
   
</section>

<?php require('elements/footer.php'); ?>
