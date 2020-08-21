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
           <img src='<?php echo $this->getThemePath() ?>/images/internal/placeholder.png' alt='New Hope Community'>
           
       <?php endif; ?>
       
</div>

<section class="internal_content_wrapper">
  <div class="internal_content_container content">
     <?php
      $a = new Area("News Header"); 
      $a->display($c);
    ?>

    <div class="news">
      <div class="news-link">
        <?php
          $a = new Area("More News Link"); 
          $a->display($c);
        ?>
      </div>
      <div class="carousel">
        <?php
          $pl = new PageList();
          $pl->filterByCollectionTypeHandle('news');
          $pages = $pl->get(); 

          foreach ($pages as $page){ 
              $url = $page->getCollectionLink();
              $title = $page->getCollectionName();
              $description = $page->getCollectionDescription();
              $thumbnail = $page->getAttribute('thumbnail');

              if($page->getAttribute('event_date')) {
                $date = $page->getAttribute('event_date');
              } ?>

              <div>
                <div class="photo">
                  <?php if (is_object($thumbnail)) {
                        ?>
                            <?php
                            $img = Core::make('html/image', array($thumbnail));
                            $tag = $img->getTag();
                            echo $tag; ?>
                        <?php
                    } else { ?>
                        <img src='<?php echo $this->getThemePath() ?>/images/placeholder.jpg' alt='New Hope Community'>
                   <?php } ?>
                </div>
                <div class="description">
                  <h3>
                    <a href=" <?php echo $url; ?>">
                    <?php echo $title; ?>
                    </a>
                    </h3>
                  <p><?php echo $description; ?></p>
                </div>
                <div class="date">
                  <?php echo $date; ?>
                </div>
              </div>

              <?php
          } ?>
        
      </div>
    </div>

     <?php
      $a = new Area("Events Header"); 
      $a->display($c);
    ?>

    <div class="events">
      <?php
          $pl = new PageList();
          $pl->filterByCollectionTypeHandle('event');
          $pages = $pl->get(); 

          foreach ($pages as $page){ 
              $url = $page->getCollectionLink();
              $title = $page->getCollectionName();
              $description = $page->getCollectionDescription();

              if($page->getAttribute('event_date')):
                $date = $page->getAttribute('event_date');
                $datearray = explode(' ',trim($date));
              else:
                $datearray = ["TBA" ,""];
              endif;
              ?>

              <div>
                <div class="date">
                  <?php echo $datearray[0]; ?>
                  <span><?php echo $datearray[1]; ?></span>
                </div>
                <div class="description">
                  <h3>
                    <a href=" <?php echo $url; ?>">
                    <?php echo $title; ?>
                    </a>
                    </h3>
                  <p><?php echo $description; ?></p>
                </div>
              </div>

              <?php
          } ?>
    </div>
        
  </div>
	<div class="sidebar_container">
     <h2>Related Pages</h2>
		<?php
      $list = new \Concrete\Core\Page\PageList();
      $list->filterByPageTypeHandle(['news','event']);
      $list->sortByPublicDateDescending();
      $pages = $list->getResults();

      foreach($pages as $page) {
        $path = '';
        $pagename = $page->getCollectionName();
        $description = $page->getCollectionDescription();
        $url = $page->getCollectionLink();

        if($page->getAttribute('event_date')) {
          $date = $page->getAttribute('event_date');
        } ?> 
       
        <p>
          <a href="<?php echo $url ?>"><?php echo $pagename ?></a>
        <br />
          <?php echo $date ?>
        </p>

        
    <?php } ?>
    <div class="additional-content">
        <?php
          $a = new Area("Additional Sidebar Content"); 
          $a->display($c);
        ?>        

      </div>
	</div>
</section>

<?php require('elements/footer.php'); ?>
