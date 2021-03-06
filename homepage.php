<?php require('elements/header.php'); ?>

<div class="homepage content">
	<section class="slideshow">
		<?php
			$a = new Area("Photo Slider");
			$a->display();
		?>
	</section>

	<section class="ctas">
		<div class="container">
			<div>
				<a href="/who-we-are/contact-us">
					<img src="<?php echo $this->getThemePath(); ?>/images/vector-smart-object_2.png" alt="house icon">
					<p>Join Our <br />Community</p>
				</a>
			</div>
			<div><img src="<?php echo $this->getThemePath(); ?>/images/divider.png"></div>
			<div>
				<a href="/support-us/donation">
					<img src="<?php echo $this->getThemePath(); ?>/images/vector-smart-object_3.png" alt="house icon">
					<p>Make a <br />Donation</p>
				</a>
			</div>
			<div><img src="<?php echo $this->getThemePath(); ?>/images/divider.png"></div>
			<div>
				<a href="/who-we-are/careers">
					<img src="<?php echo $this->getThemePath(); ?>/images/vector-smart-object_4.png" alt="house icon">
					<p>Join Our <br />Team</p>
				</a>
			</div>
			<div><img src="<?php echo $this->getThemePath(); ?>/images/divider.png"></div>
			<div>
				<a href="https://www.facebook.com/NewHope1975/" target="_blank">
					<img src="<?php echo $this->getThemePath(); ?>/images/vector-smart-object_5.png" alt="house icon">
					<p>Tell Your <br />Friends</p>
				</a>
			</div>
		</div>
	</section>
	<section class="mission">
		<div class="container">
			<?php
				$a = new Area("Primary Text");
				$a->display();
			?>
		</div>
	</section>
	<div class="greenhouse-bg">
		<section class="newhope-info">
			<div class="container">
				<div>
					<a href="/our-services/hope-farm">
						<img src="<?php echo $this->getThemePath(); ?>/images/hope-farm.png">
						<div class="title"><p>Hope Farm</p></div>
					</a>
				</div>
				<div>
					<a href="https://vimeo.com/452189846" data-lity>
						<img src="<?php echo $this->getThemePath(); ?>/images/tour.png">
						<div class="title"><p>Learn About Us</p></div>
					</a>
				</div>
				<div>
					<a href="/our-services/select-human-services">
						<img src="<?php echo $this->getThemePath(); ?>/images/care-coordination.png">
						<div class="title"><p>Select Human Services</p></div>
					</a>
				</div>
				<div>
					<a href="/who-we-are/our-staff">
						<img src="<?php echo $this->getThemePath(); ?>/images/meet-staff.png">
						<div class="title"><p>Meet Our Staff</p></div>
					</a>
				</div>
			</div>
			<div class="container contact">
				<p>For information and for a tour, contact Service Navigators Stephanie Elberth or Scott Whitehead,<br /> at 845-468-5280 or <a href="mailto:services@newhopecommunity.org">services@newhopecommunity.org</a></p>
			</div>
		</section>
		<section class="statistics">
			<div class="container">
				<img src="<?php echo $this->getThemePath(); ?>/images/homepage-stats.svg">
			</div>
		</section>
		<section class="buttons">
			<div class="container">
				<a href="/who-we-are/contact-us">
					<button class="btn">Join Our Community</button>
				</a>
				<a href="/who-we-are"><button class="btn">Learn More About Us</button></a>
			</div>
		</section>
	</div>
	<!-- end of greenhouse background -->

	<section class="connect">
			<div class="container">
				<div class="enewsletter">
					<i class="fa fa-newspaper"></i><span>E-newsletter</span>
						<input type="text" placeholder="First Name" />
						<input type="text" placeholder="Last Name" />
						<input type="email" placeholder="Email" />
				</div>
				<div class="social">
					<div>
						<i class="fa fa-comment"></i><span>Get Social</span>
						<div class="facebook-feed">
							<div class="logo-box">
							  <span>NEW HOPE</span>
							</div>
							<div>
								<span>New Hope Community</span>
								<div class="fb-like" data-href="https://www.newhopecommunity.org" data-width="150" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
								<?php
									$a = new Area("Social Photo");
									$a->display();
								?>
							</div>
						</div>
						
					</div>
					<div class="icons">
						<a href="https://www.instagram.com/newhope1975" target="_blank">
							<i class="fa fa-instagram"></i>
						</a>
						<a href="https://www.linkedin.com/company/new-hope-community-inc-/about/" target="_blank"><i class="fa fa-linkedin"></i></a>
						<a href="https://www.facebook.com/NewHope1975/" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://www.youtube.com/user/newhopecommunity1" target="_blank"><i class="fa fa-youtube"></i></a>
						<a href="https://twitter.com/NewHope1975" target="_blank"><i class="fa fa-twitter"></i></a>
					</div>
				</div>
			</div>
		</section>
</div>

<?php require('elements/footer.php'); ?>
