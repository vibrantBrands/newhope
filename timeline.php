<?php require('elements/header.php'); ?>

<div class="timeline content">
	<section class="intro">
		<div class="legacy">
			<h1>A LEGACY<br />OF TRUST</h1>
		</div>
		<div class="roots">
			<h2>Our roots run deep</h2>
			<p>
				New Hope was created when a group of family members of people with disabilities wanted to do better than what was available to them. This legacy of excellence and constant improvement to enhance the lives of the people we support continues to drive our work each day.
			</p>
		</div>
	</section>
	
	<div class="years">
		<div class="active">
			<span>THE 70'S</span>
			THE BEGINNING
		</div>
		<div>
			<span>THE 80'S</span>
			OUR GROWTH
		</div>
		<div>
			<span>THE 90'S</span>
			BREAKING GROUND
		</div>
		<div>
			<span>2000-NOW</span>
			PROSPERITY
		</div>
	</div>

	<section class="dateboxes">
		<ul class="timeline-list">
	
	<!-- ADD THIS LOOP WHEN SITE IS ON SERVER AND IMAGES HAVE BEEN ADDED TO THE TIMELINE FILE SET.  LOOP WILL PULL IN IMAGE AS BACKGROUND, ADD IMAGE TITLE AS SLIDE TITLE AND IMAGE DESCRIPTION AS THE TIMELINE TEXT
		--------------  -->

			<?php
			  Loader::model("file_set");
			  Loader::model('file_list');

			  $counter = 0;
			 
			  $fs = FileSet::getByName('Timeline 2.0');
			  $fl = new FileList();
			  $fl->filterBySet($fs);
			  $fl->sortBy('fsDisplayOrder', 'asc');
			  $files = $fl->get();
			 
			  foreach($files as $f) {
			  	$counter++;
			    $title = $f->getAttribute("slide_title");
			    $class = $f->getAttribute("era");  
			    $text = $f->getDescription();
			    $filepath = $f->getDownloadURL(); ?>

			    <li class="<?php echo $class ?>">
			    	<div class="timeline-bg" style="background-image:url('<?php echo $filepath ?>)">
					<div class="timeline-circle"></div>

					<?php if ($counter % 2 == 0) { ?>
					<article class="timeline-post" data-aos="fade-right">
					<?php } else { ?>
					<article class="timeline-post" data-aos="fade-left">
					<?php } ?>
						<span><?php echo $title ?></span>
						<p>
							<?php echo $text ?>
						</p>
					</article>
					</div>
				</li>

			  <?php } ?>
			
			<!-- <li>
				<div class="timeline-bg seventies" style="background-image:url('<?php echo $this->getThemePath(); ?>/images/timeline/placeholder1.jpg')">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-left">
						<span>The Seventies 1</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg seventies" style="background-image:url('<?php echo $this->getThemePath(); ?>/images/timeline/placeholder2.jpg')">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>The Seventies 2</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg eighties" style="background-image:url('<?php echo $this->getThemePath(); ?>/images/timeline/placeholder3.jpg')">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-left">
						<span>The Eighties 1</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg eighties" style="background-image:url('<?php echo $this->getThemePath(); ?>/images/timeline/placeholder4.jpg')">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>The Eighties 2</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg nineties" style="background-image:url('<?php echo $this->getThemePath(); ?>/images/timeline/placeholder3.jpg')">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>The Nineties 1</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg nineties">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>The Nineties 2</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg nineties">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>The Nineties 3</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg present">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Present Day 1</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg present">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg present">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg present">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li>
			<li>
				<div class="timeline-bg">
					<div class="timeline-circle"></div>
					<article class="timeline-post" data-aos="fade-right">
						<span>Article Title</span>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc elementum, neque ac facilisis molestie, enim sapien interdum mauris, semper mollis quam orci at ipsum.</p>
					</article>
				</div>
			</li> -->
		</ul>
	</section>

<!-- end timeline div -->	
</div>

<?php require('elements/footer.php'); ?>
