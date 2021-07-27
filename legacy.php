<?php require('elements/header_foundation.php'); ?>

<div class="donation-page content">
    <?php
      $a = new Area("4 Photo Image");
      $a->display();
    ?>

<section class="internal_content_wrapper">
  <div class="internal_content_container content">
    <?php
      $a = new Area("Internal Content"); 
      $a->display($c);
    ?>
  </div>
	<div class="sidebar_container">
		<h2>Related Pages</h2>
    <?php
            $bt = BlockType::getByHandle('autonav');
            $bt->controller->displayPages = 'current'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
            $bt->controller->displayPagesCID = ''; // if display pages is set �쁟ustom��
            $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'
            $bt->controller->displaySubPages = 'all';  //none', 'all, 'relevant_breadcrumb', 'relevant'
            $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
            $bt->controller->displaySubPageLevelsNum = ''; // if displaySubPages is set 'custom'
            $bt->render('templates/sidebar_nav'); // for template 'templates/template_name';
        ?>
      <div class="additional-content">
        <?php
          $a = new Area("Additional Sidebar Content"); 
          $a->display($c);
        ?>
      </div>
	</div>
</section>
</div>

<?php require('elements/footer.php'); ?>
