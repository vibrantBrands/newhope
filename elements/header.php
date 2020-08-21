<!DOCTYPE html>

<html>

	<head>

	    <?php
	    	$this->inc('app/page_settings.php');
	    	$po = new PageOptions();

	    ?>
			<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/_css/lity.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
			<link rel="stylesheet" type="text/css" href="<?php echo $this->getThemePath(); ?>/_css/style.css">


			<?php Loader::element('header_required'); ?> <!-- must be last in load order -->

	</head>

	<body class="<?php if ($po->isHome()) { echo "home_wrapper"; } else {echo "internal_wrapper"; }  ?>">
		<body class="vibrant">
  <div class="<?php echo $c->getPageWrapperClass()?>">
  <header>
    <div class="topbar">
      <div><i class="fa fa-phone"></i><a href="tel:8454348300">(845) 434-8300</a></div>
      <div>
        <div class="social">
          <a href="https://www.instagram.com/newhope1975/" target="social"><i class="fa fa-instagram"></i></a>
          <a href="https://www.linkedin.com/company/new-hope-community-inc-/" target="social"><i class="fa fa-linkedin"></i></a>
          <a href="https://www.facebook.com/NewHope1975/" target="social"><i class="fa fa-facebook"></i></a>
          <a href="https://www.youtube.com/user/newhopecommunity1" target="social"><i class="fa fa-youtube"></i></a>
          <a href="https://twitter.com/NewHope1975" target="social"><i class="fa fa-twitter"></i></a>
        </div>
        <a class="solid-btn" href="/support-us/donation">DONATE</a>
      </div>
    </div>
    <div class="navigation">
      <div class="toggle-wrapper">
        <div class="menu-toggle inactive">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
          <span class="bg"></span>
        </div>
        <p>MENU</p>
     </div>
     <div class="logo">
       <a href="/"><img src="<?php echo $this->getThemePath(); ?>/images/nh-logo-blue.svg" alt="New Hope Logo"></a>
     </div>
    <!--<ul class="nav">
      <li class="">
        <a href="/our-services" target="_self" class="">Our Services</a>
        
      </li>
      <li class="">
        <a href="/who-we-are" target="_self" class="">Who We Are</a>
         <div class="submenu"><a href="/our-services/our-process">Our Process</a></div>
      </li>
      <li class="">
        <a href="/support-us" target="_self" class="">Support Us</a>
      </li>
        </ul> -->
        <?php   
                    $bt = BlockType::getByHandle('autonav');
                    $bt->controller->displayPages = 'top'; // 'top', 'above', 'below', 'second_level', 'third_level', 'custom', 'current'
                    //$bt->controller->displayPagesCID = ''; // if display pages is set ‘custom’
                    $bt->controller->orderBy = 'display_asc';  // 'chrono_desc', 'chrono_asc', 'alpha_asc', 'alpha_desc', 'display_desc','display_asc'             
                    $bt->controller->displaySubPages = 'all';  //none', 'all, 'relevant_breadcrumb', 'relevant'
                    $bt->controller->displaySubPageLevels = 'all'; // 'enough', 'enough_plus1', 'all', 'custom'
                    $bt->controller->displaySubPageLevelsNum = '0'; // if displaySubPages is set 'custom'
                    $bt->render('templates/main_nav'); // for template 'templates/template_name';
                    ?>
    </div>
  </header>

		<!-- PLEASE REMOVE THIS SECTION BEFORE LAUNCH -- Just placeholder for some useful C5 elements
		--------------
		<?php
			$a = new Area("Some Name");
			$a->display();
	    ?>
	    -----------
	    
	    -----------
		<?php
			$a = new GlobalArea("Some Name");
			$a->display();
	    ?>
	    -----------

		--------NOTE THAT YOU MUST USE echo $this->getThemePath(); ?> FOR ALL ELEMENTS IN THEME IMAGES/JS/CSS etc. ------
	    <img class="logo" alt="Center for Disability Services Logo" src="<?php echo $this->getThemePath(); ?>/images/cfds-logo-full-color-rgb.jpg"> 
	    -------------

		--------FOR IF YOU ARE USING c5 BUILT IN SLIDESHOW FOR HOMEPAGE SLIDE-----------
	    <?php
		  $a = new Area("Some name");
		  $blocks = $a->getTotalBlocksInArea($c);

		  if ($blocks == 0 && !$c->isEditMode()) { echo "<img src=".$this->getThemePath().".defaultImage.jpg>"; } // Default Header
		  else { $a->display($c); } // Custom header
		?>
		-->